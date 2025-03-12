<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('backend.Modules.employees.index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.Modules.employees.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name'        => 'required|string|max:255',
        'position'    => 'required|string|max:255',
        'description' => 'nullable|string',
        'email'       => 'required|email|max:255',
        'phonenumber' => 'nullable|string|max:20',
        'photo_path'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ], [
        'name.required'        => 'Meno je povinné.',
        'name.string'          => 'Meno musí byť text.',
        'name.max'             => 'Meno nesmie obsahovať viac ako 255 znakov.',

        'position.required'    => 'Pozícia je povinná.',
        'position.string'      => 'Pozícia musí byť text.',
        'position.max'         => 'Pozícia nesmie obsahovať viac ako 255 znakov.',

        'description.string'   => 'Popis musí byť text.',

        'email.required'       => 'Email je povinný.',
        'email.email'          => 'Zadajte platný email.',
        'email.max'            => 'Email nesmie obsahovať viac ako 255 znakov.',

        'phonenumber.string'   => 'Telefónne číslo musí byť text.',
        'phonenumber.max'      => 'Telefónne číslo nesmie obsahovať viac ako 20 znakov.',

        'photo_path.image'     => 'Fotografia musí byť obrázok.',
        'photo_path.mimes'     => 'Fotografia musí byť vo formáte jpeg, png, jpg, gif alebo svg.',
        'photo_path.max'       => 'Fotografia nesmie byť väčšia ako 2MB.',
    ]);


        // Ak je odoslaná fotografia, uložte ju a aktualizujte cestu
        if ($request->hasFile('photo_path')) {
            $filePath = $request->file('photo_path')->store('employees/photos', 'public');
            $validatedData['photo_path'] = $filePath;
        }

        // Vytvorenie nového zákazníka
        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Zákazník bol úspešne vytvorený.');
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
    public function edit(Employee $employee)
    {
        return view('backend.Modules.employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        // Validácia vstupných údajov
        $validatedData = $request->validate([
            'name'        => 'required|string|max:255',
            'position'    => 'required|string|max:255',
            'description' => 'nullable|string',
            'email'       => 'required|email|max:255',
            'phonenumber' => 'nullable|string|max:20',
            'photo_path'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo_path')) {
            if ($employee->photo_path && Storage::disk('public')->exists($employee->photo_path)) {
                Storage::disk('public')->delete($employee->photo_path);
            }

            $filePath = $request->file('photo_path')->store('employees/photos', 'public');
            $validatedData['photo_path'] = $filePath;
        }

        $employee->update($validatedData);
        return redirect()->route('employees.index')->with('success', 'Zamestnanec bol úspešne aktualizovaný.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::findOrFail($id);

        if ($employee->photo_path && Storage::disk('public')->exists($employee->photo_path)) {
            Storage::disk('public')->delete($employee->photo_path);
        }

        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Zamestnanec bol úspešne vymazaný.');
    }
}
