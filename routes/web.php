<?php

use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;


Route::get('/stocks.index', [StockController::class, 'index'])->name('stocks.index');
Route::get('/stocks.create', [StockController::class, 'create'])->name('stocks.create');
Route::post('/stocks', [StockController::class, 'store'])->name('stocks.store');
Route::get('/stocks/{id}/edit', [StockController::class, 'edit'])->name('stocks.edit');
Route::put('/stocks/{id}', [StockController::class, 'update'])->name('stocks.update');
Route::delete('stocks/{id}', [StockController::class, 'destroy'])->name('stocks.destroy');