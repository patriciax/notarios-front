<?php

use App\Http\Controllers\PrivateFolderController;
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
Route::get('/directores', function () {
    return view('directores');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/private', function () {
    return view('private');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/films', function () {
    return view('films');
});

Route::post('validate-user', [PrivateFolderController::class, 'validateUser']);

Route::get('/private-folder', [PrivateFolderController::class, 'show']);

Route::get('/private-project/{slug}', [PrivateFolderController::class, 'showProject']);
