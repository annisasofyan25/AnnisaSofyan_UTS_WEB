<?php
use App\Http\Controllers\PembalapMotorController;
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

Route::get('/', [PembalapMotorController::class, 'index' ] );
Route::get('/tambah', [PembalapMotorController::class, 'tambah' ] );
Route::post('/tambah', [PembalapMotorController::class, 'store' ] );
Route::get('/hapus/{id}', [PembalapMotorController::class, 'hapus' ] );
Route::get('/edit/{id}', [PembalapMotorController::class, 'edit' ] );
Route::post('/edit/{id}', [PembalapMotorController::class, 'update' ] );
Route::get('/lihat/{id}', [PembalapMotorController::class, 'lihat' ] );
