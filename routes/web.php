<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\DosenController;

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

//TUGAS


//Route untuk get semua data dosen
Route::get('/dataDosen', [DosenController::class, 'getDataDosen']);

//Route untuk get semua data mahasiswa
Route::get('/mahasiswa', [DosenController::class, 'getMahasiswa']);

//Route untuk get semua data mata kuliah
Route::get('/matkul', [DosenController::class, 'getMataKuliah']);

//Route untuk get semua data dosen berdasarkan id
route::get('/dosen/{id}', [DosenController::class, 'getDosenById']);

//Route untuk get data nama matkul saja
Route::get('/matkulModel', [DosenController::class, 'getMatkulModel']);

//Route untuk get 5 data mahasiswa
route::get('/mahasiswaData', [DosenController::class, 'getDataMahasiswa']);

//AKHIR










Route::get('/', function () {
    return ('string');
});

Route::get('/barang/{id}/detail/{detail}', function($id, $detail){
    return 'Barang dengan id '.$id.' dengan detail '.$detail;
});


Route::prefix('/test')->group(function(){ //prefix dengan group
    Route::get('/users', function(){
        return 'user';
    });
});


Route::get('/test', function(){
    return 'test';
});


//HelloController
Route::get('/barang', [HelloController::class, 'getBarang']);
Route::get('/barang/{id}', [HelloController::class, 'getBarangById']);
Route::get('/bunga/{id}', [HelloController::class, 'getBunga']);
Route::get('/view', [HelloController::class, 'returnView']);
Route::get('/view/{id}', [HelloController::class, 'returnView']);


// DosenController
Route::get('/dosen', [DosenController::class, 'getDosen']);

Route::get('/model', [DosenController::class, 'getDosenModel']);