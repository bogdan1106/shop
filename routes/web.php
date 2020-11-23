<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Models\Container;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoriesController;

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
//

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');
Route::get('/category/{id}', [MainController::class, 'category'])->name('category');
Route::get('/basket/place', [MainController::class, 'basketPlace'])->name('basket-place');
Route::get('/product/{product}', [MainController::class, 'single'])->name('product');



Route::get('/order', [BasketController::class, 'basketPlace'])->name('order');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::post('/basket/add/{id}', [BasketController::class, 'add'])->name('basket-add');
Route::post('/basket/remove/{id}', [BasketController::class, 'remove'])->name('basket-remove');
Route::post('/basket/confirm', [BasketController::class, 'basketConfirm'])->name('basket-confirm');



Route::group(['prefix' => 'admin'], function (){
    Route::resource('/products', ProductsController::class);
    Route::resource('/categories', CategoriesController::class);
});



Route::get('/register',[AuthController::class, 'registerForm'])->name('register');
Route::get('/login',[AuthController::class, 'loginForm'])->name('login');
Route::post('/register',[AuthController::class, 'register']);
Route::post('/login',[AuthController::class, 'login']);
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile')->middleware('auth');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');


Route::get('/confirm/{id}/{code}',[AuthController::class, 'confirm']);
Route::get('/password-change/{id}/{code}',[AuthController::class, 'passwordChangeForm']);
Route::post('/password-change',[AuthController::class, 'passwordChange'])->name('password-change');


Route::get('/test', [MainController::class, 'test']);


Route::get('/set-new-password', function (){
    return view('authorization.set-new-password');
});