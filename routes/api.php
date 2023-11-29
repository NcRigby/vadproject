<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ConsumptionTableController;
use App\Http\Controllers\ConsumptionController;
use App\Http\Controllers\AdmissionTableController;
use App\Http\Controllers\AdmissionController;


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
Route::get('/Seller',[SellerController::class,'index']);
Route::get('/Seller/{id}',[SellerController::class,'show']);
Route::post('/Seller',[SellerController::class,'store']);


Route::get('/Provider',[ProviderController::class,'index']);
Route::get('/Provider/{id}',[ProviderController::class,'show']);
Route::post('/Provider',[ProviderController::class,'store']);

Route::get('/ProductType',[ProductTypeController::class,'index']);
Route::get('/ProductType/{id}',[ProductTypeController::class,'show']);
Route::post('/ProductType',[ProductTypeController::class,'store']);

Route::get('/Product',[ProductController::class,'index']);
Route::get('/Product/{id}',[ProductController::class,'show']);
Route::post('/Product',[ProductController::class,'store']);

Route::get('/Manufacturer',[ManufacturerController::class,'index']);
Route::get('/Manufacturer/{id}',[ManufacturerController::class,'show']);
Route::post('/Manufacturer',[Manufacturer::class,'store']);

Route::get('/ConsumptionTable',[ConsumptionTableController::class,'index']);
Route::get('/ConsumptionTable/{id}',[ConsumptionTableController::class,'show']);
Route::post('/ConsumptionTable',[ConsumptionTableController::class,'store']);

Route::get('/Consumption',[ConsumptionController::class,'index']);
Route::get('/Consumption/{id}',[ConsumptionController::class,'show']);
Route::post('/Consumption',[ConsumptionController::class,'store']);

Route::get('/AdmissionTable',[AdmissionTableController::class,'index']);
Route::get('/AdmissionTable/{id}',[AdmissionTableController::class,'show']);
Route::post('/AdmissionTable',[AdmissionTableController::class,'store']);

Route::get('/Admission',[AdmissionController::class,'index']);
Route::get('/Admission/{id}',[AdmissionController::class,'show']);
Route::post('/Admission',[AdmissionController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
