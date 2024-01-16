<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




Route::controller(BukuController::class)->group(function () {
    Route::prefix('/buku')->group(function (){
        // http://127.0.0.1:8000/api/buku
        Route::get('/', 'index');
        // http://127.0.0.1:8000/api/buku/1
        Route::get('/{id}', 'show');

 // http://127.0.0.1:8000/api/buku   
//  {
//     "judul": "bukan buku",
//     "pengarang": "orangerti",
//     "tahun_terbit": "1055",
//     "jenis": "laki laki",
//     "status": "orang misin"
// }    
        Route::post('/', 'store');


        // http://127.0.0.1:8000/api/buku/1
        // {
        //     "judul": "bukan buku update",
        //     "pengarang": "orangerti",
        //     "tahun_terbit": "1055",
        //     "jenis": "laki laki",
        //     "status": "orang misin"
        // }
        Route::put('/{id}', 'update');


        // http://127.0.0.1:8000/api/buku/1
        Route::delete('/{id}', 'destroy');

    });
});
Route::controller(AnggotaController::class)->group(function () {
    Route::prefix('/anggota')->group(function (){

// http://127.0.0.1:8000/api/anggota
        Route::get('/', 'index');

// http://127.0.0.1:8000/api/anggota/1
        Route::get('/{id}', 'show');

// http://127.0.0.1:8000/api/anggota
// {
//     "nama": "pokok nya manusia",
//     "alamat": "jln. orageti",
//     "kota": "Semarang",
//     "no_tlp": "0234234234",
//     "tgl_lahir": "17-12-1009"
// }
        Route::post('/', 'store');

        // http://127.0.0.1:8000/api/anggota/1
        // {
        //     "nama": "pokok nya manusia update",
        //     "alamat": "jln. orageti",
        //     "kota": "Semarang",
        //     "no_tlp": "0234234234",
        //     "tgl_lahir": "17-12-1009"
        // }
        Route::put('/{id}', 'update');

        // http://127.0.0.1:8000/api/anggota/1
        Route::delete('/{id}', 'destroy');

    });
});

Route::controller(PinjamController::class)->group(function () {
    Route::prefix('/pinjam')->group(function (){

        // http://127.0.0.1:8000/api/pinjam/1
        Route::get('/', 'index');

        // http://127.0.0.1:8000/api/pinjam/1
        Route::get('/{id}', 'show');


        // http://127.0.0.1:8000/api/pinjam
        // {
        //     "id_anggota": 2,
        //     "id_buku": 3,
        //     "tgl_pinjam": "12-31-2323",
        //     "tgl_kembali": "12-31-2324"
        // }
        Route::post('/', 'store');

        // http://127.0.0.1:8000/api/pinjam/1
        // {
        //     "id_anggota": 2,
        //     "id_buku": 3,
        //     "tgl_pinjam": "12-31-2323",
        //     "tgl_kembali": "12-31-2324"
        // }
        Route::put('/{id}', 'update');
        
        // http://127.0.0.1:8000/api/pinjam/1
        Route::delete('/{id}', 'destroy');

    });
});