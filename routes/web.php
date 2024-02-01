<?php

use App\Http\Controllers\ClientController;
use App\Models\Address;
use App\Models\Client;
use App\Models\Conductor;
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
    return Address::all();
});


Route::controller(ClientController::class)->group(function () {
    Route::get('/clients/', 'index');
    Route::get('/clients/{id}', 'show');
    Route::post('/clients/', 'store')->name('create-a-new-client');
});
