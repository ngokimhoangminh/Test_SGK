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

// 配車データ一覧
Route::resource('allocation_vehicles_lists', 'App\Http\Controllers\AllocationVehiclesListsController')->middleware(['auth']);


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


// 配車データ一覧
Route::get('allocation_vehicles_lists', 'App\Http\Controllers\AllocationVehiclesListsController@index')->middleware(['auth'])->name('allocation_vehicles_lists');
Route::get('product', 'App\Http\Controllers\ProductController@index')->middleware(['auth'])->name('product');

// 配車データ更新
Route::get('allocation_vehicles', 'App\Http\Controllers\AllocationVehiclesController@index')->middleware(['auth'])->name('allocation_vehicles');
Route::match(['get', 'post'], 'allocation_vehicles/week', 'App\Http\Controllers\AllocationVehiclesController@week')->middleware(['auth']);

// 顧客マスタ
Route::match(['get', 'post'], 'customers', 'App\Http\Controllers\CustomersController@create')->middleware(['auth'])->name('customers');
Route::match(['get', 'post'], 'customers/ajaxGetCustomersData/{customer_code}/{customer_name}/{customer_kana}', 'App\Http\Controllers\CustomersController@ajaxGetCustomersData')->middleware(['auth']);

// 排出事業場
Route::match(['get', 'post'], 'emission_sites', 'App\Http\Controllers\EmissionSitesController@create')->middleware(['auth'])->name('emission_sites');

// 対象エリアデータ
Route::match(['get', 'post'], 'target_areas/ajaxGetAddressData/{postal_code}', 'App\Http\Controllers\TargetAreasController@ajaxGetAddressData')->middleware(['auth']);

require __DIR__.'/auth.php';

