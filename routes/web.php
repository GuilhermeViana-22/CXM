<?php


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');


Route::post('/logar', [LoginController::class, 'logar'])->name('auth.logar');
Route::get('/cadastrar', [LoginController::class, 'cadastrar'])->name( 'cadastrar');
Route::post('/store', [LoginController::class, 'store'])->name('store');
// Rotas que exigem autenticação
Route::middleware(['auth'])->group(function () {
    Route::get('/arearestrita', [LoginController::class, 'index'])->name('arearestrita');
});

//formulario
Route::resource('/formulario', ContatoController::class);
// Rota de login
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

