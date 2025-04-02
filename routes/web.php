<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\GstController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return redirect()->route('login');
});
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/add-party',[PartyController::class,'addParty'])->name('add-party');
Route::post('/create-party',[PartyController::class,'createParty'])->name('create-party');
Route::get('/manage-party',[PartyController::class,'manageParty'])->name('manage-party');
Route::get('/edit-party/{id}',[PartyController::class,'editParty'])->name('edit-party');
Route::put('/update-party/{id}',[PartyController::class,'updateParty'])->name('update-party');
Route::delete('/delete-party/{party}',[PartyController::class,'deleteParty'])->name('delete-party');







Route::get('/create-bill', [GstController::class, 'createBill'])->name('create-bill'); // GET Request
Route::post('/add-bill', [GstController::class, 'addBill'])->name('add-bill'); // POST Request


Route::get('/manage-bill',[GstController::class,'manageBill'])->name('manage-bill');
Route::get('/print-bill',[GstController::class,'printBill'])->name('print-bill');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
