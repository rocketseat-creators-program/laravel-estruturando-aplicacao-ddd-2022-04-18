<?php

use App\App\Web\Produto\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::namespace('\App\App\Web\Produto\Controllers')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produtos.index');
    Route::post('/', [ProdutosController::class, 'store'])->name('produtos.store');
});
