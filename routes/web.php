<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TransactionController;
use App\Http\Controllers\Backend\ConfigDestinationController;
use App\Http\Controllers\Backend\ConfigCurrencyController;
use App\Http\Controllers\Backend\ConfigServiceController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'transactions', 'as' => 'transaction.'], function() {
    Route::get('/', [TransactionController::class, 'index'])->name('index');
    Route::post('/store', [TransactionController::class, 'store'])->name('store');
    Route::get('/create', [TransactionController::class, 'create'])->name('create');
    Route::get('/show/{id}', [TransactionController::class, 'show'])->name('show');
    
});

Route::group(['prefix' => 'config_destionataions', 'as' => 'config_destination.'], function() {
    Route::get('/', [ConfigDestinationController::class, 'index'])->name('index');
    Route::post('/store', [ConfigDestinationController::class, 'store'])->name('store');
    Route::get('/create', [ConfigDestinationController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [ConfigDestinationController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ConfigDestinationController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'config_currencies', 'as' => 'config_currency.'], function() {
    Route::get('/', [ConfigCurrencyController::class, 'index'])->name('index');
    Route::post('/store', [ConfigCurrencyController::class, 'store'])->name('store');
    Route::get('/create', [ConfigCurrencyController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [ConfigCurrencyController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ConfigCurrencyController::class, 'update'])->name('update');
});

Route::group(['prefix' => 'config_services', 'as' => 'config_service.'], function() {
    Route::get('/', [ConfigServiceController::class, 'index'])->name('index');
    Route::post('/store', [ConfigServiceController::class, 'store'])->name('store');
    Route::get('/create', [ConfigServiceController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [ConfigServiceController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [ConfigServiceController::class, 'update'])->name('update');
});
