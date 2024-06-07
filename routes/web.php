<?php

use App\Http\Controllers\ContactController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render(
        'Landing',
        [
            'popularProducts' => Product::getModel()
                ->ordered()
                ->wherePopular(true)
                ->get(),
        ]
    );
})->name('landing');

Route::get('/shop', function () {
    return Inertia::render(
        'Shop',
        [
            'products' => Product::getModel()
                ->ordered()
                ->get(),
        ]
    );
})->name('shop');

Route::get('/product/{id}', function ($id) {
    return Inertia::render(
        'ProductDetails',
        [
            'product' => Product::getModel()
                ->whereId($id)
                ->first(),
        ]
    );
})->name('product');


Route::resource('contact', ContactController::class)
    ->only(['index', 'store']);
