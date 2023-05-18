<?php

use App\Http\Controllers\employeefed;
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

// p
route::get('form',[employeefed::class,'viewForm']);
route::post('add_data',[employeefed::class,'InsertData']);
route::get('view_dat',[employeefed::class,'tableView']);