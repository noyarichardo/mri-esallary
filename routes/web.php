<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ReportController;
// use App;
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

// Route::get('/', function () {
//     return view('welcome');
// });


route::get('/login',[LoginController::class,'pageLogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postLogin'])->name('postLogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ['auth','checklevel:admin,user']], function () {
    route::get('/home',[PegawaiController::class,'index'])->name('home');
    route::get('/data-pegawai',[PegawaiController::class,'adminPage'])->name('home');
    route::get('/user-report',[PegawaiController::class,'userPage'])->name('user-report');
    route::get('/create-pegawai',[PegawaiController::class,'create'])->name('create-pegawai');
    route::post('/simpan-pegawai',[PegawaiController::class,'store'])->name('simpan-pegawai');
    route::get('/edit-pegawai/{id}',[PegawaiController::class,'edit'])->name('edit-pegawai');
    route::post('/update-pegawai/{id}',[PegawaiController::class,'update'])->name('update-pegawai');
    route::get('/delete-pegawai/{id}',[PegawaiController::class,'destroy'])->name('delete-pegawai');
});
Route::group(['middleware' => ['auth','checklevel:user']], function () {
    // route::get('/home-user',[ReportController::class,'index'])->name('home');
    // route::get('/user-report',[PegawaiController::class,'userPage'])->name('user-report');
});
