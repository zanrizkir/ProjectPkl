<?php

// panggil controller Siswa
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route siswa
// Route::resource('siswa', SiswaController::class);

Route::resource('post',PostController::class);

// Route Nilai
Route::resource('nilai', NilaiController::class);

Route::resource('jurusan', JurusanController::class);

Route::get('/test-admin', function () {
    return view('layouts.admin');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::group(['prefix' => 'admin','midware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('siswa', SiswaController::class);
    Route::resource('wali', WaliController::class);
});