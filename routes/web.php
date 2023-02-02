<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin2Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
// })

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/adminhome', [AdminhomeController::class, 'adminhome'])->name('adminhome')->middleware('auth');

Route::get('/admin', [AdminController::class, 'admin'])->name('admin')->middleware('auth');
Route::get('/admin-tambahfirma', [AdminController::class, 'admintambahfirma'])->name('admintambahfirma')->middleware('auth');
Route::post('/admin-tambahfirma-insert', [AdminController::class, 'admintambahfirmainsert'])->name('admintambahfirmainsert');
Route::get('/admin-firmaedit/{id}', [AdminController::class, 'adminfirmaedit'])->name('adminfirmaedit')->middleware('auth');
Route::post('/admin-firmaupdate/{id}', [AdminController::class, 'adminfirmaupdate'])->name('adminfirmaupdate');
Route::get('/admin-firmadelete/{id}', [AdminController::class, 'adminfirmadelete'])->name('adminfirmadelete');

Route::get('/admin2', [Admin2Controller::class, 'admin2'])->name('admin2')->middleware('auth');
Route::get('/admin2-tambahpengadilan', [Admin2Controller::class, 'admintambahpengadilan'])->name('admintambahpengadilan')->middleware('auth');
Route::post('/admin2-tambahpengadilan-insert', [Admin2Controller::class, 'admintambahpengadilaninsert'])->name('admintambahpengadilaninsert');
Route::get('/admin2-pengadilanedit/{id}', [Admin2Controller::class, 'adminpengadilanedit'])->name('adminpengadilanedit')->middleware('auth');
Route::post('/admin2-pengadilanupdate/{id}', [Admin2Controller::class, 'adminpengadilanupdate'])->name('adminpengadilanupdate');
Route::get('/admin2-pengadilandelete/{id}', [Admin2Controller::class, 'adminpengadilandelete'])->name('adminpengadilandelete');


Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/registeruser', [RegisterController::class, 'registeruser'])->name('registeruser');

Route::get('admindok1', function(){
    return view('admindok1');
});

