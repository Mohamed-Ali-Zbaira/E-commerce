<?php

use App\Models\product;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ClientController;

//  use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandeController;
use Illuminate\App\Http\Controllers\HomeController;

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
/*Guest page*/

Route::get('/',[GuestController::class,'home']);
Route::get('/product/details/{id}',[GuestController::class,'ProductDetails']);
Route::get('/products/{category}/list',[GuestController::class,'shop']);
Route::post('/products/search',[GuestController::class,'search']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',[AdminController::class,'dashboard']); 
//client route
Route::get('/client/dashboard',[ClientController::class,'dashboard']);
Route::get('/client/profile',[ClientController::class,'profile']);
Route::POST('/client/profile/update',[ClientController::class,'updateclient'])->middleware('auth');//modifier page profile
Route::POST('/client/review/store ',[ClientController::class,'addreview'])->middleware('auth');
Route::POST('/client/order/store',[CommandeController::class,'store'])->middleware('auth');
Route::get('/client/cart',[ClientController::class,'cart'])->middleware('auth');
Route::get('/delete-ligne-commande',[CommandeController::class,'deleteLigneCommande']);
//client admin
Route::get('/admin/profile',[AdminController::class,'profile'])->middleware('auth','admin');//affichage page profile
Route::POST('/admin/profile/update',[AdminController::class,'updateprofile'])->middleware('auth','admin');//modifier page profile
Route::get('/admin/categories',[CategoryController::class,'index'])->middleware('auth','admin'); 
Route::get('/admin/commandes',[CategoryController::class,'affichage_commandes'])->middleware('auth','admin');//ha4i
Route::get('/admin/User',[CategoryController::class,'affichage_user'])->middleware('auth','admin');//ha4i
Route::POST('/admin/categories/store',[CategoryController::class,'store'])->middleware('auth','admin');
Route::get('/admin/categorie/{id}/delete',[CategoryController::class,'destroy'])->middleware('auth','admin');
Route::POST('/admin/categorie/update',[CategoryController::class,'update'])->middleware('auth','admin');

//Route::get('users/index', [UserController::class, 'index'])->name('users.index');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
//route product
Route::get('/admin/product',[ProductController::class,'index'])->middleware('auth','admin');
Route::POST('/admin/product/store',[ProductController::class,'store'])->middleware('auth','admin');
Route::get('/admin/product/{id}/delete',[ProductController::class,'destroy'])->middleware('auth','admin');
Route::POST('/admin/product/update',[ProductController::class,'update'])->middleware('auth','admin');

