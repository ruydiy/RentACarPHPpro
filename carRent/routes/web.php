<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;


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

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[CarsController::class, 'index'])->name('dashboard');

    Route::get('/car',[CarsController::class, 'add']);
    Route::post('/car',[CarsController::class, 'create']);

    Route::get('/car/{car}', [CarsController::class, 'edit']);
    Route::post('/car/{car}', [CarsController::class, 'update']);
});

