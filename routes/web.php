<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratController;



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

Route::get('/home',[SuratController::class,'index'])->name('home');
route::post('tambah',[SuratController::class,'store']);

Route::get('/1', function () {
    return view('tambah');
});
// Route::get('/2', function () {
//     return view('lihat');
// });
Route::get('/lihat/{id}',[SuratController::class,'show']);

Route::get('about', function () {
    return view('about');
});
route::get('/hapus_{id}',[SuratController::class,'hapus']);
// Route::get('/download_{file}',  [SuratController::class,'download'])->name('download');
//route::get('/download/{file}',[SuratController::class,'download'])->name('download');
Route::get('/download/{file}',  [SuratController::class,'download'])->name('download');
route::post('cari',[SuratController::class,'cari']);
