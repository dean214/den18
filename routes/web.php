<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransactionController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/v1/getinventory',[ TransactionController::class,'getinventory']);
route::get('/v2/getinventorydata',[TransactionController::class,'getInventoryData']);
route::get('/v3/challenging',[TransactionController::class,'getinventoryChallenging']);
route::get('/v4/difficult',[TransactionController::class,'getinventoryChallenging']);