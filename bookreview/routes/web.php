<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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



Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminController::class,'index'])->name("admin.index");
    Route::get('/register',[RegisterController::class,'showAdminRegistrationForm'])->name("admin.auth.register");
    Route::post('/register',[RegisterController::class,'storeAdminAccount'])->name("admin.auth.register.store");
    Route::get('/login',[LoginController::class,'showAdminLoginForm'])->name("admin.auth.login");
    Route::post('/login',[LoginController::class,'adminLogin'])->name("admin.auth.login.store");
    Route::group(['prefix' => 'category'], function () {
        Route::get('/',[CategoryController::class,'index'])->name("admin.category.index"); // danh sách danh mục
        Route::get('/add', [CategoryController::class,'add'])->name('admin.category.add'); // Trả về form thêm mới
        Route::post('/add', [CategoryController::class,'store'])->name('admin.category.store'); // tạo mới category
        Route::get('/edit/{id}', [CategoryController::class,'edit'])->name('admin.category.edit'); // Trả về form edit category
        Route::post('/edit/{id}', [CategoryController::class,'update'])->name('admin.category.update'); // Update category
        Route::get('/delete/{id}', [CategoryController::class,'destroy'])->name('admin.category.destroy'); // delete category
    });
    Route::group(['prefix' => 'review'], function (){
        Route::get('/',[ReviewController::class,'index'])->name("admin.review.index"); // danh sách danh mục
        Route::get('/add', [ReviewController::class,'add'])->name('admin.review.add'); // Trả về form thêm mới
        Route::post('/add', [ReviewController::class,'store'])->name('admin.review.store'); // tạo mới category
        Route::get('/edit/{review_id}', [ReviewController::class,'edit'])->name('admin.review.edit'); // Trả về form edit category
        Route::post('/edit/{review_id}', [ReviewController::class,'update'])->name('admin.review.update'); // Update category
        Route::get('/delete/{id}', [ReviewController::class,'destroy'])->name('admin.review.destroy'); // delete category
    });
    Route::group(['prefix' => 'menu'], function (){
        Route::get('/',[MenuController::class,'index'])->name("admin.menu.index"); // danh sách danh mục
        Route::get('/add', [MenuController::class,'add'])->name('admin.menu.add'); // Trả về form thêm mới
        Route::post('/add', [MenuController::class,'store'])->name('admin.menu.store'); // tạo mới category
        Route::get('/edit/{id}', [MenuController::class,'edit'])->name('admin.menu.edit'); // Trả về form edit category
        Route::post('/edit/{id}', [MenuController::class,'update'])->name('admin.menu.update'); // Update category
        Route::get('/delete/{id}', [MenuController::class,'destroy'])->name('admin.menu.destroy'); // delete category
    });
    Route::group(['prefix' => 'user'], function (){
        Route::get('/',[UserController::class,'index'])->name("admin.user.index"); // danh sách danh mục
        //Route::get('/delete/{id}', [UserController::class,'destroy'])->name('admin.menu.destroy'); // delete category
    });
});
Route::get('/', function () {
    return view('frontend.home');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/media', [HomeController::class, 'media'])->name('media');

Route::get('/tinymce', function () {
    return view('tinymce');
});
