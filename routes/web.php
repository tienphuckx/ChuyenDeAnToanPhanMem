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
    return view('welcome');
});

Route::get('/sinh-vien', 'SinhVienController@index');
Route::get('/sinh-vien/them', 'SinhVienController@insert');
Route::post('/sinh-vien/luu', 'SinhVienController@save_with_validate')->name('sinhvien.luu');
// Route::post('welcome/login', 'WelcomeController@login')->name('welcome.login');

Route::get('/dang-nhap', function () {
    return view('pages.login');
});

// Route::get('profile', 'UserController@show')->middleware('auth');