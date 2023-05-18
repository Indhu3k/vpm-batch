<?php

use App\Http\Controllers\createcustomercontroller;
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

Route::get('create_customer',[createcustomercontroller::class,'showCustomerForm']);
Route::post('CusData',[createcustomercontroller::class,'addCustomer']);
