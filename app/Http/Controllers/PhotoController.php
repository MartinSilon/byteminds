<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo_path' => 'required|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'description_active' => 'nullable|boolean',
            'link' => 'nullable|string',
            'link_active' => 'nullable|boolean',
            'size' => 'nullable|string',
        ], [
            'photo_path.required' => 'Obrázok je povinný.',
            'photo_path.image' => 'Súbor musí byť obrázok.',
            'photo_path.mimes' => 'Obrázok musí byť vo formáte: jpeg, png, jpg alebo gif.',
            'description.string' => 'Popis musí byť textový reťazec.',
            'description_active.boolean' => 'Pole musí byť pravda (true) alebo nepravda (false).',
            'link.string' => 'Odkaz musí byť textový reťazec.',
            'link_active.boolean' => 'Pole musí byť pravda (true) alebo nepravda (false).',
            'size.string' => 'Veľkosť musí byť textový reťazec.'
        ]);


        if ($request->hasFile('photo_path')) {
            $validated['photo_path'] = $request->file('photo_path')->store('images/uploads', 'public');
        }


        Photo::create($validated);

        return back()->with('success', 'Fotografia bola úspešne vytvorená');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        return view('backend.database.photos.edit', compact('photo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        $validated = $request->validate([
            'photo_path' => 'nullable',
            'description' => 'nullable|string',
            'link' => 'nullable|string',
            'size' => 'nullable|string',
        ], [
            'description.string' => 'Popis musí byť textový reťazec.',
            'link.string' => 'Odkaz musí byť textový reťazec.',
            'size.string' => 'Veľkosť musí byť textový reťazec.'
        ]);



        if ($request->hasFile('photo_path')) {
            if ($photo->photo_path) {
                Storage::disk('public')->delete($photo->photo_path);
            }
            $validated['photo_path'] = $request->file('photo_path')->store('images/uploads', 'public');
        }

        $photo->update($validated);

        return back()->with('success', 'Fotografia bola úspešne aktualizovaná');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
