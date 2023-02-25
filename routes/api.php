<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSaleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AuthController;
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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    //sales
    Route::get('/list_sales', [ProductSaleController::class, 'index']);
    Route::post('/save_sales', [ProductSaleController::class, 'store']);
    Route::get('/list_sales/{userId}', [ProductSaleController::class, 'findByUserId']);
    //Company
    Route::get('/company', [CompanyController::class, 'index']);
    Route::post('/company', [CompanyController::class, 'store']);
    Route::get('/company/{company_id}', [CompanyController::class, 'findCompanyById']);
    Route::get('/company/{company_id}/users', [CompanyController::class, 'findUserByCompany']);

});


