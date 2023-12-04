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
Route::prefix('Seller')->group(function(){
    
    Route::get('/',[SellerController::class,'index']);
    Route::get('/{id}',[SellerController::class,'show']);
    Route::post('/',[SellerController::class,'store']);
    Route::delete('/{id}', [SellerController::class,'destroy']);
    Route::put('/',[SellerController::class,'update']);
    
});

Route::prefix('Provider')->group(function(){
    
    Route::get('/',[ProviderController::class,'index']);
    Route::get('/{id}',[ProviderController::class,'show']);
    Route::post('/',[ProviderController::class,'store']);
    Route::delete('/{id}', [ProviderController::class,'destroy']);
    Route::put('/',[ProviderController::class,'update']);
    
});

Route::prefix('ProductType')->group(function(){
    
    Route::get('/',[ProductTypeController::class,'index']);
    Route::get('/{id}',[ProductTypeController::class,'show']);
    Route::post('/',[ProductTypeController::class,'store']);
    Route::delete('/{id}', [ProductTypeController::class,'destroy']);
    Route::put('/',[ProductTypeController::class,'update']);
    
});

Route::prefix('Product')->group(function(){
    
    Route::get('/',[ProductController::class,'index']);
    Route::get('/{id}',[ProductController::class,'show']);
    Route::post('/',[ProductController::class,'store']);
    Route::delete('/{id}', [ProductController::class,'destroy']);
    Route::put('/',[ProductController::class,'update']);
    
});

Route::prefix('Manufacturer')->group(function(){
    
    Route::get('/',[ManufacturerController::class,'index']);
    Route::get('/{id}',[ManufacturerController::class,'show']);
    Route::post('/',[ManufacturerController::class,'store']);
    Route::delete('/{id}', [ManufacturerController::class,'destroy']);
    Route::put('/',[ManufacturerController::class,'update']);
    
});

Route::prefix('ConsumptionTable')->group(function(){
    
    Route::get('/',[ConsumptionTableController::class,'index']);
    Route::get('/{id}',[ConsumptionTableController::class,'show']);
    Route::post('/',[ConsumptionTableController::class,'store']);
    Route::delete('/{id}', [ConsumptionTableController::class,'destroy']);
    Route::put('/',[ConsumptionTableController::class,'update']);
    
});

Route::prefix('Consumption')->group(function(){
    
    Route::get('/',[ConsumptionController::class,'index']);
    Route::get('/{id}',[ConsumptionController::class,'show']);
    Route::post('/',[ConsumptionController::class,'store']);
    Route::delete('/{id}', [ConsumptionController::class,'destroy']);
    Route::put('/',[ConsumptionController::class,'update']);
    
});

Route::prefix('AdmissionTable')->group(function(){
    
    Route::get('/',[AdmissionTableController::class,'index']);
    Route::get('/{id}',[AdmissionTableController::class,'show']);
    Route::post('/',[AdmissionTableController::class,'store']);
    Route::delete('/{id}', [AdmissionTableController::class,'destroy']);
    Route::put('/',[AdmissionTableController::class,'update']);
    
});

Route::prefix('Admission')->group(function(){
    
    Route::get('/',[AdmissionController::class,'index']);
    Route::get('/{id}',[AdmissionController::class,'show']);
    Route::post('/',[AdmissionController::class,'store']);
    Route::delete('/{id}', [AdmissionController::class,'destroy']);
    Route::put('/',[AdmissionController::class,'update']);
    
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
