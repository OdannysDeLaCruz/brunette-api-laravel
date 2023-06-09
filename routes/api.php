<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search', SearchController::class);


Route::prefix('/products')->group(function() {
    Route::get('/', [ProductController::class,'index']);
    Route::get('/{id}', [ProductController::class,'show']);
    Route::post('/', [ProductController::class,'store']);
    Route::put('/{id}', [ProductController::class,'update']);
    Route::delete('/{id}', [ProductController::class,'destroy']);
});

Route::prefix('/categories')->group(function() {
    Route::get('/', [CategoryController::class,'index']);
    Route::get('/{categoryId}', [CategoryController::class,'show']);
    Route::get('/{categoryId}/products', [CategoryController::class,'getProducts']);
    // Route::post('/', [CategoryController::class,'store']);
    // Route::put('/{id}', [CategoryController::class,'update']);
    // Route::delete('/{id}', [CategoryController::class,'destroy']);
});
