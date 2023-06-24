<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\App;
use App\Models\User;
use App\Models\Role;

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
// User::create ([
//     'name' => 'guest',
//     'email' => 'guest@example.com',
//     'password' => bcrypt('guest'),
//     'role_id' => '2',
// ]);
Route::get('roles', function(){
    return Role::with('user')->get();
});
Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('greetings/{name?}', [PagesController::class, 'greeting'])->where('name', "[A-Za-z]+")->name('greetings');
Route::resource('messages', MessagesController::class);
Route::resource('users', UsersController::class);
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'loginValidate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');