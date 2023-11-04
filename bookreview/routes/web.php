<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class,'index']
) -> name('admin.index');
Route::prefix('admin')->group(function () {
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class,'index']
    ) -> name('admin.category.index');
    Route::get('/book', [App\Http\Controllers\Admin\BookController::class,'index']
    ) -> name('admin.book.index');
});





