<?php

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

use App\Http\Controllers\IndexController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/perwalian', [IndexController::class, 'index'])->name('perwalianList');
    Route::post('/perwalian/store', [IndexController::class, 'store'])->name('dkbs.store');

    Route::get('/profile', [UserController::class, 'index'])->name('profileList');

    Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::post('/matakuliah/add', [MataKuliahController::class, 'add'])->name('matakuliah.add');

    Route::post('/matakuliah/add', 'MataKuliahController@add')->name('matakuliah.add');

});



