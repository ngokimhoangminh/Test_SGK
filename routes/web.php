<?php

use Illuminate\Support\Facades\Route;

Route::get('/info', function () {
    return view('info');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::group([
        'as' => 'admin.',
        'middleware' => 'is_admin',
        'prefix' => 'admin'
    ], function () {
        //Product
        Route::resource('/products', \App\Http\Controllers\ProductController::class);
        Route::get('products/active/{id}', [\App\Http\Controllers\ProductController::class, 'activeProduct'])->name('products.active');
        //Tasks
        Route::resource('/tasks', \App\Http\Controllers\TaskController::class);
        //Users
        Route::resource('/users', \App\Http\Controllers\UserController::class);
    });
});
// 対象エリアデータ
Route::match(['get', 'post'], 'target_areas/ajaxGetAddressData/{postal_code}', 'App\Http\Controllers\TargetAreasController@ajaxGetAddressData')->middleware(['auth']);

require __DIR__ . '/auth.php';