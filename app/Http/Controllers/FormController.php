<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Spracovanie kontaktného formulára
     */
    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Odoslanie e-mailu s použitím šablóny
        Mail::send('emails.contact_request', ['request' => $request], function ($message) use ($request) {
            $message->to('kontakt@newgreencompany.sk') // Príjemca
            ->subject($request->subject) // Predmet
            ->from('kontakt@newgreencompany.sk', 'New Green Company') // Odosielateľ
            ->replyTo($request->email, $request->name . ' ' . $request->surname); // Odpoveď na užívateľovu adresu
        });

        return back()->with('success', 'Vaša správa bola úspešne odoslaná!');
    }

    /**
     * Spracovanie formulára na nábor klientov
     */
    public function storeClient(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'options' => 'required|string',
            'details' => 'required|string',
        ]);

        // Odoslanie e-mailu s použitím šablóny
        Mail::send('emails.client_request', ['request' => $request], function ($message) use ($request) {
            $message->to('kontakt@newgreencompany.sk') // Cieľový e-mail
            ->subject('Žiadosť od klienta: ' . $request->options) // Predmet
            ->from('kontakt@newgreencompany.sk', 'New Green Company') // Odosielateľ
            ->replyTo($request->email, $request->fullName); // E-mail na odpoveď
        });

        return back()->with('success', 'Vaša žiadosť bola úspešne odoslaná, počkajte prosím kým Vám naši zamestnanci odpovedia emailom!');
    }

    /**
     * Spracovanie formulára na nábor obchodníkov
     */
    public function storeTrader(Request $request)
    {
        $request->validate([
            'fullName' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'interest' => 'required|string',
            'experience' => 'nullable|string',
            'resume' => 'required|file|mimes:pdf',
        ]);

        // Uloženie životopisu
        $resumePath = $request->file('resume')->store('resumes', 'public');

        // Odoslanie e-mailu s použitím šablóny
        Mail::send('emails.trader_request', ['request' => $request], function ($message) use ($request, $resumePath) {
            $message->to('kontakt@newgreencompany.sk')
                ->subject('Žiadosť o obchodníka')
                ->from('kontakt@newgreencompany.sk', 'New Green Company')
                ->replyTo($request->email, $request->fullName)
                ->attach(storage_path('app/public/' . $resumePath));
        });

        return back()->with('success', 'Vaša žiadosť bola úspešne odoslaná, počkajte prosím kým Vám naši zamestnanci odpovedia emailom!');
    }
}
