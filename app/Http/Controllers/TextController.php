<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{


    public function store(Request $request)
    {
        $messages = [
            'text1.required' => 'Pole "Text 1" je povinné.',
            'text1.string' => 'Pole "Text 1" musí byť text.',

            'text1_rows.required' => 'Počet riadkov pre Text 1 je povinné pole.',
            'text1_rows.integer' => 'Počet riadkov pre Text 1 musí byť celé číslo.',

            'text2.string' => 'Pole "Text 2" musí byť text.',
            'text2_rows.integer' => 'Počet riadkov pre Text 2 musí byť celé číslo.',

            'text3.string' => 'Pole "Text 3" musí byť text.',
            'text3.max' => 'Pole "Text 3" nesmie mať viac ako 255 znakov.',
            'text3_rows.integer' => 'Počet riadkov pre Text 3 musí byť celé číslo.',
        ];

        $validated = $request->validate([
            'text1' => 'required|string',
            'text1_rows' => 'required|integer',
            'text2' => 'nullable|string',
            'text2_rows' => 'nullable|integer',
            'text2_active' => 'nullable|boolean',
            'text3' => 'nullable|string',
            'text3_rows' => 'nullable|integer',
            'text3_active' => 'nullable|boolean',
        ], $messages);

        $text = Text::create($validated);

        return back()->with('success', 'Záznam bol úspešne vytvorený');
    }

    public function edit(Text $text)
    {
        return view('backend.database.texts.edit', compact('text'));
    }

    public function update(Request $request, Text $text)
    {
        $messages = [
            'text1.required' => 'Pole "Text 1" je povinné.',
            'text1.string' => 'Pole "Text 1" musí byť text.',

            'text2.string' => 'Pole "Text 2" musí byť text.',

            'text3.string' => 'Pole "Text 3" musí byť text.',
        ];

        $validated = $request->validate([
            'text1' => 'required|string',
            'text2' => 'string',
            'text3' => 'string',
        ], $messages);


        $text->update($validated);

        return back()->with('success', 'Záznam bol úspešne aktualizovaný.');
    }

    public function destroy(Text $text)
    {
        $text->delete();

        return response()->json(['message' => 'Záznam bol úspešne vymazaný']);
    }
}
