<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Create_defautControlller; 
use App\Http\Controllers\ReclamationControlller; 
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// route for default

Route::get('/create_defaut', [Create_defautControlller::class, "create"])->name("defaut.create");
// Route::get('/create_defaut', [Create_defautControlller::class])->name("defauts");


// route for reclamation
Route::get('/create_reclamation', [ReclamationControlller::class, "create"])->name("reclamation.create");
Route::get('/create_reponse', [ReclamationControlller::class, "reponse"])->name("reclamation.reponse");