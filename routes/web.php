<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('home');
});


// Route::get('/user', [Usercontroller::class, 'index'])->name('user.index');
// Route::get('/customer', [Customercontroller::class, 'index'])->name('customer.index');

// Route:: get('/user/{id}', [Usercontroller::class, 'show'])
// ->name('user.show')
// ->where('id', '[0-9]+');

// Route:: get('/user/{name}/{email}', [Usercontroller::class, 'getNameEmail'])->name('user.getNameEmail');

// Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');



Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/create', [CategoryController::class, 'create']);
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

