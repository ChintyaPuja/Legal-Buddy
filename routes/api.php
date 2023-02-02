<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/',[HomeController::class, 'indexApi']);
Route::post('/registeruser', [RegisterController::class, 'registeruserApi']);
Route::post('/loginproses', [LoginController::class, 'loginprosesApi']);
Route::get('/logout', [LoginController::class, 'logoutApi']);

Route::middleware('auth:sanctum')->group(function(){
Route::get('/admin', [AdminController::class, 'adminApi']);
Route::post('/admin-tambahfirma-insert', [AdminController::class, 'admintambahfirmainsertApi']);
Route::post('/admin-firmaupdate/{id}', [AdminController::class, 'adminfirmaupdateApi']);
Route::get('/admin-firmadelete/{id}', [AdminController::class, 'adminfirmadeleteApi']);
});