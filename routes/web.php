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

Route::get('/admin', function() {
    return redirect()->route('admin.login');
});

route::prefix('admin')->name('admin.')->group(function () {
    route::get('login', [\App\Http\Controllers\admin\loginController::class, 'index'])->name('login');
    route::post('login', [\App\Http\Controllers\admin\loginController::class, 'login'])->name('login.check');

    route::middleware('auth:admin')->group(function () {
        route::get('/', [\App\Http\Controllers\admin\homeController::class, 'index'])->name('home');
        route::get('logout', [\App\Http\Controllers\admin\loginController::class, 'logout'])->name('logout');

        //Management
        route::get('report', [\App\Http\Controllers\admin\managementController::class, 'report'])->name('report');
        route::get('dkbs', [\App\Http\Controllers\admin\managementController::class, 'dkbs'])->name('dkbs');
        route::prefix('dkbs')->name('dkbs.')->group(function () {
            route::get('/show/{id}', [\App\Http\Controllers\admin\managementController::class, 'showDkbs'])->name('show');
        });

        //Panel Kendali

        //Mahasiswa
        route::get('mahasiswa', [\App\Http\Controllers\admin\mahasiswaController::class, 'index'])->name('mahasiswa');
        route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
            route::get('/create', [\App\Http\Controllers\admin\mahasiswaController::class, 'create'])->name('create');
        });

        //Mata Kuliah
        route::get('matakuliah', [\App\Http\Controllers\admin\matakuliahController::class, 'index'])->name('matakuliah');
        route::prefix('matakuliah')->name('matakuliah.')->group(function () {
            route::get('/create', [\App\Http\Controllers\admin\matakuliahController::class, 'create'])->name('create');
            route::post('/create', [\App\Http\Controllers\admin\matakuliahController::class, 'store'])->name('store');
            route::get('/edit/{id}', [\App\Http\Controllers\admin\matakuliahController::class, 'edit'])->name('edit');
            route::put('/edit/{id}', [\App\Http\Controllers\admin\matakuliahController::class, 'update'])->name('update');
            route::delete('/{id}', [\App\Http\Controllers\admin\matakuliahController::class, 'destroy'])->name('destroy');

            route::get('/show/{id}', [\App\Http\Controllers\admin\matakuliahController::class, 'show'])->name('detailmk');
            route::prefix('/show/{id}')->name('detailmk.')->group(function () {
                route::get('/create', [\App\Http\Controllers\admin\detailmkController::class, 'create'])->name('create');
                route::post('/create', [\App\Http\Controllers\admin\detailmkController::class, 'store'])->name('store');
                route::get('/edit/{idmk}', [\App\Http\Controllers\admin\detailmkController::class, 'edit'])->name('edit');
                route::put('/edit/{idmk}', [\App\Http\Controllers\admin\detailmkController::class, 'update'])->name('update');
                route::delete('/{idmk}', [\App\Http\Controllers\admin\detailmkController::class, 'destroy'])->name('destroy');
            });
        });

        //Perwalian
        route::get('perwalian', [\App\Http\Controllers\admin\perwalianController::class, 'index'])->name('perwalian');
        route::prefix('perwalian')->name('perwalian.')->group(function () {
            route::get('/create', [\App\Http\Controllers\admin\mahasiswaController::class, 'create'])->name('create');
        });
    });
});