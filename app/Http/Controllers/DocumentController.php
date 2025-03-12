<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all(); // Načítanie všetkých dokumentov z databázy
        return view('backend.Subpages.dokumenty', compact('documents')); // Odoslanie do view
    }

    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|file|mimes:pdf',
            'name' => 'required'
        ]);

        $file = $request->file('document');
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs('documents', $fileName, 'public');

        Document::create([
            'name' => $request->name,
            'path' => $path,
        ]);

        return back()->with('success', 'Dokument bol úspešne nahraný.');
    }


    public function edit(Document $document)
    {
        return view('backend.Subpages.dokumenty_edit', compact('document'));
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'document' => 'nullable|file|mimes:pdf|max:10240', // max 10MB
        ]);

        if ($request->hasFile('document')) {
            if (\Storage::disk('public')->exists($document->path)) {
                \Storage::disk('public')->delete($document->path);
            }
            $file = $request->file('document');
            $fileName = $file->getClientOriginalName();
            $path = $file->storeAs('documents', $fileName, 'public');
            $document->path = $path;
        }

        $document->name = $request->name;
        $document->save();

        return redirect()->route('documents.index')->with('success', 'Dokument bol úspešne aktualizovaný.');
    }



    public function destroy(Document $document)
    {
        if (\Storage::disk('public')->exists($document->path)) {
            \Storage::disk('public')->delete($document->path);
        }

        $document->delete();
        return back()->with('success', 'Dokument bol úspešne odstránený.');
    }
}
