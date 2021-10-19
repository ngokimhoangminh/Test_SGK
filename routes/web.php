<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/info', function () {
    return view('info');
});




Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Product
Route::resource('/product', \App\Http\Controllers\ProductController::class);




// 対象エリアデータ
Route::match(['get', 'post'], 'target_areas/ajaxGetAddressData/{postal_code}', 'App\Http\Controllers\TargetAreasController@ajaxGetAddressData')->middleware(['auth']);

require __DIR__.'/auth.php';

