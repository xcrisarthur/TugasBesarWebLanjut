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

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DkbsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JadwalController;
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
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-photo', 'UserController@updatePhoto')->name('profile.updatePhoto');

//    Route::get('/profile', [UserController::class, 'profile'])->name('profileList');


    Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::post('/matakuliah/add', [MataKuliahController::class, 'add'])->name('matakuliah.add');

    Route::post('/matakuliah/add', 'MataKuliahController@add')->name('matakuliah.add');

//    Route::get('/register', [IndexController::class, 'index'])->name('registerList');
    Route::get('/api/dkbs/semester/{semesterId}', 'DkbsController@getDkbsBySemester');

    Route::get('/dkbs', [DkbsController::class, 'index'])->name('dkbsList');
//    Route::get('/api/matakuliah/{semesterId}', [DkbsController::class, 'getMataKuliahBySemesterAndUser'])->name('matakuliahBySemesterAndUser');

    Route::post('/dkbs', 'DkbsController@getMataKuliahBySemester')->name('dkbsList');

    Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwalList');

//    Route::get('/dkbs/{semesterId}', [DkbsController::class, 'getMataKuliahBySemester'])->name('dkbsList');
//    Route::get('getMataKuliahBySemester/{semesterId}', 'MataKuliahController@getBySemester');

//    Route::get('/getMataKuliah', 'MataKuliahController@getMataKuliahBySemester');

//    Route::get('/dkbs', 'IndexController@index')->name('dkbs');

});

//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [RegisterController::class, 'register']);

//Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('/register', 'Auth\RegisterController@register');
