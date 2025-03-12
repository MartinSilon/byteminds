<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TicketController;

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'send'])->name('login');


//ADMIN ROUTE
Route::prefix('/admin/')->middleware('auth')->group(function (){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', function () {return view('backend.index');})->name('admin.index');

    Route::get('/database', [DatabaseController::class, 'index'])->name('admin.database');

    Route::resource('texts', TextController::class);
    Route::resource('photos', PhotoController::class);

    Route::prefix('/modules/')->group(function (){
        Route::get('/price-offer', function(){ return view('backend.Modules.priceOffer.index'); })->name('priceoffer.index');
        Route::post('/price-offer/generate', [AdminController::class, 'priceOfferGenerate'])->name('priceoffer.generate');

        Route::resource('employees', EmployeesController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('documents', DocumentController::class);

        Route::get('/ticket-settings', [TicketController::class, 'indexTicketSettings'])->name('ticket.settings.index');

    });

    Route::prefix('/subpage/')->group(function (){
        Route::get('/domov', function(){ return view('backend.Subpages.domov'); });

        Route::get('/onas', function(){ return view('backend.Subpages.onas'); });
        Route::get('/dokumenty', function(){ return view('backend.Subpages.dokumenty'); });
        Route::get('/kontakt', function(){ return view('backend.Subpages.kontakt'); });
        Route::get('/clanky', function(){ return view('backend.Subpages.clanky'); });

        Route::get('/paticka', function(){ return view('backend.Subpages.footer'); });

    });

    Route::resource('/ticket', TicketController::class);
    Route::post('/storeStatus', [TicketController::class, 'storeStatus'])->name('ticket.status.store');
    Route::delete('/deleteStatus/{ticketStatus}', [TicketController::class, 'destroyStatus'])->name('ticket.status.destroy');


    Route::post('/storeClient', [TicketController::class, 'storeClient'])->name('ticket.client.store');
    Route::delete('/deleteClient/{ticketClient}', [TicketController::class, 'destroyClient'])->name('ticket.client.destroy');
    Route::put('/updateClient/{ticketClient}', [TicketController::class, 'updateClient'])->name('ticket.client.update');

});
