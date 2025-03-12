<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/dokumenty', [PageController::class, 'documents'])->name('documents');
Route::get('/kontakty', [PageController::class, 'contacts'])->name('contacts');
Route::get('/zaujem', [PageController::class, 'interest'])->name('interest');
Route::get('/najst-zakaznika', [PageController::class, 'findCustomer'])->name('find-customer');

Route::get('/o-nas', [PageController::class, 'about'])->name('about');
Route::get('/klient', [PageController::class, 'client'])->name('client');
Route::get('/obchodnik', [PageController::class, 'trader'])->name('trader');
Route::get('/poradenstvo', [PageController::class, 'consulting'])->name('consulting');
Route::get('/clanky', [PageController::class, 'blog'])->name('blog');

Route::get('/clanky/{slug}', [PageController::class, 'articleblog'])->name('articleblog');


Route::post('/form/client', [FormController::class, 'storeClient'])->name('form.client.store');
Route::get('/klient', [PageController::class, 'client'])->name('client');
Route::post('/form/trader', [FormController::class, 'storeTrader'])->name('form.trader.store');
Route::post('/contact/send', [FormController::class, 'sendContactEmail'])->name('send.contact.email');
Route::post('/client/store', [FormController::class, 'storeClient'])->name('store.client');
Route::post('/trader/store', [FormController::class, 'storeTrader'])->name('store.trader');
