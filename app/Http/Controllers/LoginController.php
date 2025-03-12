<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function send(Request $request)
    {
        // Validácia prihlasovacích údajov
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ], [
            'email.required'    => 'Email je povinný.',
            'email.email'       => 'Zadajte platný email.',
            'password.required' => 'Heslo je povinné.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('employees.index'))
                ->with('success', 'Prihlásenie úspešné!');
        }
        return back()->withErrors(['error' => 'Nesprávne prihlasovacie údaje'])
            ->withInput();
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Boli ste odhlásení.');
    }
}
