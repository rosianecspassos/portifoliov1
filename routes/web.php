<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
  //Rotas para home   
Route::prefix('home')->group(function(){
//Rota para página inicial
 Route::get('/',[HomeController::class, 'index'])->name('application.index');
//Dados salvos
Route::post('/', [HomeController::class, 'store'])->name('application.index'); 
Route::post('/upload/foto-perfil', [HomeController::class, 'uploadFotoPerfil'])->name('upload.foto-perfil');

});

  //Rotas para cadastros
  Route::prefix('cadastros')->group(function(){
    //Rota para página de cadastro dos dados
    Route::get('/principal', [HomeController::class, 'create'])->name('cadastros.dadosprincipais'); 
    Route::get('/principal/update', [HomeController::class, 'update'])->name('applicationindex.blade.php');

    });



Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//./vendor/bin/sail mysql -u root
//Show tables; 
//DELETE FROM nome_da_tabela;
//DESC tabela;
//SELECT * FROM principais;

require __DIR__.'/auth.php';
