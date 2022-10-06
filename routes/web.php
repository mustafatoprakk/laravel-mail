<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view("/contact", "contactForm")->name("contactForm");
Route::post("/send", [ContactController::class, "send"])->name("send.email");

// mail download
// php artisan  make:mail Subscribe --markdown=emails.subscribers
