<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    return view('home');
});



Route::post("/insert",[ MainController::class, "addData"]); 
Route::get("/insert",[ MainController::class, "insert"]); 
Route::get('/view',[ MainController::class, "readData"]); 
Route::get('/view3',[ MainController::class, "readData3"]); 
Route::get('/view4',[ MainController::class, "readData4"]); 