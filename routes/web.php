<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reservation', function () {
    return view('reservation');
});
use App\Http\Controllers\ContactsController2;

Route::get('/contact', [ContactsController2::class, 'create']);
Route::post('/contact', [ContactsController2::class, 'store']);

Route::get('/template', function () {
    return view('template');
});