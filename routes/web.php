<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;

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
    return view('welcome'); //oke
});

//SINH VIEN
Route::get('sinh-vien', [SinhVienController::class, 'index']);
Route::get('sinh-vien/them', 'SinhVienController@insert');
Route::post('sinh-vien/luu', [SinhVienController::class, 'save']);
Route::get('sinh-vien/{id}/edit', 'SinhVienController@edit');
Route::put('sinh-vien/{id}/update', 'SinhVienController@update');
Route::get('sinh-vien/{id}/delete', 'SinhVienController@delete');


Route::get('/dang-nhap', function () {
    return view('pages.login');
});

// Route::get('profile', 'UserController@show')->middleware('auth');
