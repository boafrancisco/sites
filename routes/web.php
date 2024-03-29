<?php

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\SendmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[NavigationController::class,'home']) -> name('home');
Route::get('/servicos',[NavigationController::class,'servicos']) -> name('servicos');
Route::get('/galeria',[NavigationController::class,'galeria']) -> name('galeria');
Route::get('/contacto',[NavigationController::class,'contacto']) -> name('contacto');

Route::post('/',[SendmailController::class, 'lead'])->name('lead');
