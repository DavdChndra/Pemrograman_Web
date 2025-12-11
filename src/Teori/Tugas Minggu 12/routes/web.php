<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanAjarController;

Route::get('/', function () {
    return redirect('/order');
});

Route::get('/stock', [BahanAjarController::class, 'stokList'])->name('stock.list');
Route::get('/order', [BahanAjarController::class, 'orderForm'])->name('order.form');
Route::post('/order', [BahanAjarController::class, 'submitOrder'])->name('order.submit');
Route::get('/tracking', [BahanAjarController::class, 'trackingDo'])->name('tracking.do');