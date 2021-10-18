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

// テスト用（データベースの接続テスト＆未ログインは参照不可）
Route::get('/dbtest', 'App\Http\Controllers\DBTestController@index')->middleware(['auth']);

// テスト用（PHPの情報表示＆未ログインでも参照可）
Route::get('/info', function () {
    return view('info');
});




Route::get('/', function () {
    return view('welcome');
});

// 川崎さんお試し用
Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Product
Route::get('product', 'App\Http\Controllers\ProductController@index')->middleware(['auth'])->name('product');



// 対象エリアデータ
Route::match(['get', 'post'], 'target_areas/ajaxGetAddressData/{postal_code}', 'App\Http\Controllers\TargetAreasController@ajaxGetAddressData')->middleware(['auth']);

require __DIR__.'/auth.php';

