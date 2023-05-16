<?php

use Illuminate\Http\Request;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:1'
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

    Route::resource('roles', \App\Http\Controllers\RoleController::class);


});
