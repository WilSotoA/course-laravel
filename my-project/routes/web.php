<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessagesController;



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

Route::resource('mensajes', MessagesController::class);

// Route::get('messages', [MessagesController::class, 'index'])->name('messages.index');
// Route::get('messages/create', [MessagesController::class, 'create'])->name('messages.create');
// Route::post('messages', [MessagesController::class, 'store'])->name('messages.store');
// Route::get('messages/{id}', [MessagesController::class, 'show'])->name('messages.show');
// Route::get('messages/{id}/edit', [MessagesController::class, 'edit'])->name('messages.edit');
// Route::put('messages/{id}', [MessagesController::class, 'update'])->name('messages.update');
// Route::delete('messages/{id}', [MessagesController::class, 'destroy'])->name('messages.destroy');
