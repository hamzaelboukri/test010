<?php

use App\Models\prodect;
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


Route::get('/index', [prodect::class, 'index']);
Route::get('/creat', [prodect::class, 'creat']);
Route::post('/creat', [prodect::class, 'store']);

