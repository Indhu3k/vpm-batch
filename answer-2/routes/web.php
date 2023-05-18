<?php

use App\Http\Controllers\feedbackController;
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

Route::get('feedBack_form', function () {
    return view('feedbackForm');
});

Route::post('get_feedbacks', [feedbackController::class,'sendFeedback']);

Route::get('show_feedbacks',[feedbackController::class,'showFeedbacks']);
