<?php

use App\Http\Controllers\PropertyController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

// Create additional Routes below

Route::get('/properties/create', [PropertyController::class, 'create']);

Route::post('/properties/create', [PropertyController::class, 'add']);
Route::get('/properties', [PropertyController::class, 'index']);

Route::get('/properties/{property_id}', [PropertyController::class, 'prop']);