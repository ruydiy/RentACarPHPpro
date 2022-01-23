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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[\App\Http\Controllers\TasksController::class, 'index'])->name('dashboard');
    Route::get('/show', [\App\Http\Controllers\HomeController::class, 'index']);

    Route::get('/create',[\App\Http\Controllers\CarController::class, 'add']);
    Route::post('/create',[\App\Http\Controllers\CarController::class, 'create']);

    Route::get('/edit/{edit}', [\App\Http\Controllers\CarController::class, 'edit']);
    Route::put('/edit/{edit}', [\App\Http\Controllers\CarController::class, 'update']);
    Route::post('/edit/{edit}', [\App\Http\Controllers\CarController::class, 'delete']);

    //Route::post('create',[\App\Http\Controllers\PhoneController::class, 'upload']);

    Route::get('/search', [\App\Http\Controllers\CarController::class, 'search']);


});
/*
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[CarsController::class, 'index'])->name('dashboard');

    Route::get('/car',[CarsController::class, 'add']);
    Route::post('/car',[CarsController::class, 'create']);

    Route::get('/car/{car}', [CarsController::class, 'edit']);
    Route::post('/car/{car}', [CarsController::class, 'update']);
});
*/

