<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\IndexController;
// use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;
use App\Http\Controllers\DaminController;


Route::get('/', function () {
    return view('authAdmin.loginAdmin');
});

 Route::group(['middleware' => 'guest'], function(){
    Route::post('/login', [AuthController::class, 'loginproses'])->name('login');
    Route::get('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register');
});

Route::resource('damins', DaminController::class);
Route::get('damins/{nama}/edit', 'DaminController@edit')->name('damins.edit');
Route::put('damins/{nama}', 'DaminController@update')->name('damins.update');
Route::delete('damins/{nama}', 'DaminController@destroy')->name('damins.destroy');
Route::POST('/store_admin', [DaminController::class, 'store']);
// Route::get('/damins.create', [DaminController::class, 'create'])->name('damins.create');

Route::resource('/dafpeds', \App\Http\Controllers\DafpedController::class);

Route::get("/export-pdf", [PengaduanController::class, "exportPdf"]);

Route::get("/logout", [AuthController::class, "processLogout"])->name('logout');
Route::get('/pengaduan', [IndexController::class, 'pengaduan']);
// Route::get('/index', function(){
//     return view('penyintas_dashboard.index');
// });

Route::group(['middleware' => 'auth'], function(){
    Route::get('/index', [IndexController::class, 'index']);
});