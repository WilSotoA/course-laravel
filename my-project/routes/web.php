<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('contactme', [PagesController::class, 'contact'])->name('contacts');
Route::post('contact', [PagesController::class, 'message']);
Route::get('greetings/{name?}', [PagesController::class, 'greeting'])->where('name', "[A-Za-z]+")->name('greetings');
