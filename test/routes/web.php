<?php


// namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\customercontroller;
use Illuminate\Http\Request;
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
route::get('cusfeedform',[customercontroller::class,'showFeedBackForm']);
route::post('getcusData',[customercontroller::class,'addCusFeedback']);
route::get('customerlist',[customercontroller::class,'showCustomerTable']);






