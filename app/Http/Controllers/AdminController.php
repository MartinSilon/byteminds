<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function priceOfferGenerate(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'cenovePrvky' => $request->input('cenovePrvky', []),
            'dodatecneTexty' => $request->input('dodatecneTexty', []),
            'ceny' => $request->input('ceny', [])
        ];

        $pdf = Pdf::loadView('backend.Modules.priceOffer.pdf-template', $data);
        return $pdf->download('Cenova-ponuka-'.$data['name'].'.pdf');
    }
}
