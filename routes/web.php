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

Route::middleware(['auth'])->group(function (){
	Route::group([
		'middleware'=>'is_admin',
	],function(){
        //Product
        Route::resource('/product', \App\Http\Controllers\ProductController::class);
        Route::get('/active-product/{id}', [\App\Http\Controllers\ProductController::class,'activeProduct'])->name('product.active');
        //Tasks
        Route::resource('/task', \App\Http\Controllers\TaskController::class);
        //Users
        Route::resource('/user', \App\Http\Controllers\UserController::class);
	});
});
// 対象エリアデータ
Route::match(['get', 'post'], 'target_areas/ajaxGetAddressData/{postal_code}', 'App\Http\Controllers\TargetAreasController@ajaxGetAddressData')->middleware(['auth']);

require __DIR__.'/auth.php';

