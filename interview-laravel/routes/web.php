<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\people;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/people', function ());

Route::get('/people', [people::class, 'first']);

Route::get('/', function () {
    return view('welcome');
});
