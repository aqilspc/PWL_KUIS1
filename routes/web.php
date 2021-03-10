<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ItemController;
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

Route::get('/',[HomeController::class, 'index']);
// Route::get('/about',[AboutController::class, 'index']);
// Route::get('/contact',[ContactController::class, 'index']);
// Route::get('/blog',[BlogController::class, 'index']);

Route::get('/customer',[CustomerController::class,'index']);
Route::get('/supplier',[SupplierController::class,'index']);
Route::get('/employee',[EmployeeController::class,'index']);
Route::get('/item',[ItemController::class,'index']);