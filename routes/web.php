<?php

use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'vehicles'],function (){
    Route::get('/{id}',[VehicleController::class,'getVehicle']);
});

Route::get('/', function () {
    return view('welcome');
});
