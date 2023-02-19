<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSaleController;
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

Route::get('/list_sales', [ProductSaleController::class, 'index']);
Route::post('/save_sales', [ProductSaleController::class, 'store']);
Route::get('/list_sales/{employeeId}', [ProductSaleController::class, 'findByEmployeeId']);
