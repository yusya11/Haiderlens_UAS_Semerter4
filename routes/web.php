<?php

use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});


Route::get('/dashboard/delete/{id}',[TamuController::class,'destroy']);
Route::match(['get','post'],'/dashboard/update/{id}',[TamuController::class,'update']);

Route::match(['get','post'],'/',[TamuController::class,'store']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');


Route::get('/tamu/cari',[TamuController::class,'cari']);
// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', TamuController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});