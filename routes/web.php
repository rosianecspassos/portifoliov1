<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('application.index');
});

Route::get('/cadastroprincipal', function () {
    return view('appcadastros.principal');
});

Route::get('/cadastroprojetos', function () {
    return view('appcadastros.addprojetos');
});

Route::get('/cadastrocursos', function () {
    return view('appcadastros.addcursos');
});

Route::get('/cadastrocontato', function () {
    return view('appcadastros.contatos');
});



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
