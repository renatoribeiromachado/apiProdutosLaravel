<?php
use App\Http\Controllers\Api\{
    CategoryController,ProductController
};

//Route::group([
//    'namespace' => 'Api'
//], function () {

//    Route::get('/categories', [CategoryController::class, 'index']);
//    Route::post('/categories', [CategoryController::class, 'store']);
//    Route::put('/categories/{id}', [CategoryController::class, 'update']);
//    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);
//    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    
    Route::apiResource('/categories', CategoryController::class);
    Route::apiResource('/products', ProductController::class);
//});
