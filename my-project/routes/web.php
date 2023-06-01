<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('contact', function () {
    return view('contacts');
})->name('contacts'); 
Route::get('greetings/{name?}', function ($name = "Guest") {
    $html = "<h2>HTML Content</h2>";
    $script = "<script>alert('XSS problem - Cross Site Scripting!')</script>";
$consoles = ["PlayStation","XboxOne","Wii U"];
    return view('greeting', compact('name', 'html','script','consoles'));
})->where('name', "[A-Za-z]+")->name('greetings');
