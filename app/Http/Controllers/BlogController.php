<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.Modules.blogs.index', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Modules.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customMessages = [
            'title.required'              => 'Názov článku je povinný.',
            'title.string'                => 'Názov článku musí byť text.',
            'title.max'                   => 'Názov článku nesmie byť dlhší ako 255 znakov.',

            'text1.required'              => 'Prvá časť článku je povinná.',
            'text1.string'                => 'Prvá časť článku musí byť text.',

            'text2.string'                => 'Druhá časť článku musí byť text.',

            'text3.string'                => 'Tretia časť článku musí byť text.',

            'miniature_path.required'     => 'Miniatúra je povinná.',
            'miniature_path.image'        => 'Miniatúra musí byť obrázok.',
            'miniature_path.mimes'        => 'Miniatúra musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'miniature_path.max'          => 'Miniatúra nesmie byť väčšia ako 2MB.',

            'header_path.required'        => 'Hlavičkový obrázok je povinný.',
            'header_path.image'           => 'Hlavičkový obrázok musí byť obrázok.',
            'header_path.mimes'           => 'Hlavičkový obrázok musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'header_path.max'             => 'Hlavičkový obrázok nesmie byť väčší ako 2MB.',

            'path1.required'              => 'Prvá fotografia v článku je povinná.',
            'path1.image'                 => 'Prvá fotografia musí byť obrázok.',
            'path1.mimes'                 => 'Prvá fotografia musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'path1.max'                   => 'Prvá fotografia nesmie byť väčšia ako 2MB.',

            'path1_description.string'    => 'Popis prvej fotografie musí byť text.',
            'path1_description.max'       => 'Popis prvej fotografie nesmie byť dlhší ako 255 znakov.',

            'path2.image'                 => 'Druhá fotografia musí byť obrázok.',
            'path2.mimes'                 => 'Druhá fotografia musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'path2.max'                   => 'Druhá fotografia nesmie byť väčšia ako 2MB.',

            'path2_description.string'    => 'Popis druhej fotografie musí byť text.',
            'path2_description.max'       => 'Popis druhej fotografie nesmie byť dlhší ako 255 znakov.',
        ];

        $validatedData = $request->validate([
            'title'              => 'required|string|max:255',
            'text1'              => 'required|string',
            'text2'              => 'nullable|string',
            'text3'              => 'nullable|string',
            'miniature_path'     => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'header_path'        => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path1'              => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path1_description'  => 'nullable|string|max:255',
            'path2'              => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path2_description'  => 'nullable|string|max:255',
        ], $customMessages);

        if ($request->hasFile('miniature_path')) {
            $miniatureImage = $request->file('miniature_path');
            $miniaturePath  = $miniatureImage->store('blog', 'public');
            $validatedData['miniature_path'] = $miniaturePath;
        }

        if ($request->hasFile('header_path')) {
            $headerImage = $request->file('header_path');
            $headerPath  = $headerImage->store('blog', 'public');
            $validatedData['header_path'] = $headerPath;
        }

        if ($request->hasFile('path1')) {
            $path1Image = $request->file('path1');
            $path1Path  = $path1Image->store('blog', 'public');
            $validatedData['path1'] = $path1Path;
        }

        if ($request->hasFile('path2')) {
            $path2Image = $request->file('path2');
            $path2Path  = $path2Image->store('blog', 'public');
            $validatedData['path2'] = $path2Path;
        } else {
            $validatedData['path2'] = null;
        }

        // Vytvorenie nového článku
        Blog::create($validatedData);

        return redirect()->route('blogs.index')->with('success', 'Článok bol úspešne vytvorený!');
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
    public function edit(Blog $blog)
    {
        return view('backend.Modules.blogs.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Blog $blog)
    {
        $customMessages = [
            'title.required'              => 'Názov článku je povinný.',
            'title.string'                => 'Názov článku musí byť text.',
            'title.max'                   => 'Názov článku nesmie byť dlhší ako 255 znakov.',

            'text1.required'              => 'Prvá časť článku je povinná.',
            'text1.string'                => 'Prvá časť článku musí byť text.',

            'text2.string'                => 'Druhá časť článku musí byť text.',
            'text3.string'                => 'Tretia časť článku musí byť text.',

            'miniature_path.image'        => 'Fotografia v miniatúre musí byť obrázok.',
            'miniature_path.mimes'        => 'Fotografia v miniatúre musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'miniature_path.max'          => 'Fotografia v miniatúre nesmie byť väčšia ako 2MB.',

            'header_path.image'           => 'Hlavičkový obrázok musí byť obrázok.',
            'header_path.mimes'           => 'Hlavičkový obrázok musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'header_path.max'             => 'Hlavičkový obrázok nesmie byť väčší ako 2MB.',

            'path1.image'                 => 'Prvá fotografia musí byť obrázok.',
            'path1.mimes'                 => 'Prvá fotografia musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'path1.max'                   => 'Prvá fotografia nesmie byť väčšia ako 2MB.',

            'path1_description.string'    => 'Popis prvej fotografie musí byť text.',
            'path1_description.max'       => 'Popis prvej fotografie nesmie byť dlhší ako 255 znakov.',

            'path2.image'                 => 'Druhá fotografia musí byť obrázok.',
            'path2.mimes'                 => 'Druhá fotografia musí byť vo formáte: jpeg, jpg, png, gif, svg.',
            'path2.max'                   => 'Druhá fotografia nesmie byť väčšia ako 2MB.',

            'path2_description.string'    => 'Popis druhej fotografie musí byť text.',
            'path2_description.max'       => 'Popis druhej fotografie nesmie byť dlhší ako 255 znakov.',
        ];

        // Validácia vstupov
        $validatedData = $request->validate([
            'title'              => 'required|string|max:255',
            'text1'              => 'required|string',
            'text2'              => 'nullable|string',
            'text3'              => 'nullable|string',
            'miniature_path'     => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'header_path'        => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path1'              => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path1_description'  => 'nullable|string|max:255',
            'path2'              => 'nullable|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
            'path2_description'  => 'nullable|string|max:255',
        ], $customMessages);

        // Ak je nahraný nový obrázok pre miniatúru, odstránime starý a uložíme nový
        if ($request->hasFile('miniature_path')) {
            if ($blog->miniature_path) {
                Storage::disk('public')->delete($blog->miniature_path);
            }
            $miniatureImage = $request->file('miniature_path');
            $miniaturePath  = $miniatureImage->store('blog', 'public');
            $validatedData['miniature_path'] = $miniaturePath;
        }

        // Hlavičkový obrázok
        if ($request->hasFile('header_path')) {
            if ($blog->header_path) {
                Storage::disk('public')->delete($blog->header_path);
            }
            $headerImage = $request->file('header_path');
            $headerPath  = $headerImage->store('blog', 'public');
            $validatedData['header_path'] = $headerPath;
        }

        // Prvý obrázok v článku
        if ($request->hasFile('path1')) {
            if ($blog->path1) {
                Storage::disk('public')->delete($blog->path1);
            }
            $path1Image = $request->file('path1');
            $path1Path  = $path1Image->store('blog', 'public');
            $validatedData['path1'] = $path1Path;
        }

        // Druhý obrázok v článku
        if ($request->hasFile('path2')) {
            if ($blog->path2) {
                Storage::disk('public')->delete($blog->path2);
            }
            $path2Image = $request->file('path2');
            $path2Path  = $path2Image->store('blog', 'public');
            $validatedData['path2'] = $path2Path;
        }

        // Aktualizácia článku
        $blog->update($validatedData);

        return redirect()->route('blogs.edit', $blog->id)->with('success', 'Článok bol úspešne aktualizovaný!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->miniature_path) {
            Storage::disk('public')->delete($blog->miniature_path);
        }

        if ($blog->header_path) {
            Storage::disk('public')->delete($blog->header_path);
        }

        if ($blog->path1) {
            Storage::disk('public')->delete($blog->path1);
        }

        if ($blog->path2) {
            Storage::disk('public')->delete($blog->path2);
        }

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Článok bol úspešne vymazaný!');
    }
}
