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
});
Route::get('contact', ['as' => 'contacts', function () {
    return "Contact section";
}]);
Route::get('greetings/{name?}', function ($name = "Guest") {
        return view('greeting', compact('name'));
})->where('name', "[A-Za-z]+");
