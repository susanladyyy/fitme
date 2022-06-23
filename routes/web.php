<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TransactionController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/logged', [HomeController::class, 'index'])->name('home-logged')->middleware('auth');

Route::get('/login', [LoginController::class, 'loginView'])->name('login');

Route::get('/register', [RegisterController::class, 'registerView'])->name('register');

Route::get('/shop', [ShopController::class, 'shopView'])->name('shop')->middleware('auth');

Route::get('/search', [SearchController::class, 'searchByName'])->middleware('auth');

Route::get('/profile', [ProfileController::class, 'profileView'])->name('profile')->middleware('auth');

Route::get('/cart', [CartController::class, 'cartView'])->name('cart')->middleware('auth');

Route::get('/custom', [ShopController::class, 'customView'])->name('custom')->middleware('auth');

Route::post('/checkout', [TransactionController::class, 'addTransaction'])->name('checkout')->middleware('auth');

Route::post('/add-cart', [CartController::class, 'addToCart'])->name('add-cart')->middleware('auth');

Route::post('/filter-category', [FilterController::class, 'categoryFilter'])->name('category') ->middleware('auth');

Route::post('/filter-price', [FilterController::class, 'priceFilter'])->name('price')->middleware('auth');

Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');