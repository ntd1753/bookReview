<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    return view('welcome');

});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminController::class,'index'])->name("admin.index");

    Route::group(['prefix' => 'category'], function () {
        Route::get('/',[CategoryController::class,'index'])->name("admin.category.index"); // danh sách danh mục
        Route::get('/add', [CategoryController::class,'add'])->name('admin.category.add'); // Trả về form thêm mới
        Route::post('/add', [CategoryController::class,'store'])->name('admin.category.store'); // tạo mới category
        Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('admin.category.edit'); // Trả về form edit category
        Route::post('/edit/{id}', [CategoryController::class,'update'])->name('admin.category.update'); // Update category
        Route::get('/delete/{id}', [CategoryController::class,'destroy'])->name('admin.category.destroy'); // delete category
    });
});

