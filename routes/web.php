<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EmailFetchController;
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

Route::get('/emails/{type}', [EmailController::class, 'index'])->name('emails');
Route::get('/email_read/{id}', [EmailController::class, 'emailRead'])->name('email_read');
Route::get('/show-emails/{type}', [EmailController::class, 'showEmails']);
Route::get('/settings', [EmailController::class, 'settings'])->name('settings');
Route::post('/settings', [EmailController::class, 'updateSettings'])->name('update_settings');
Route::get('/check', [EmailController::class, 'check']);
Route::get('/create', [EmailController::class, 'create'])->name('create');
Route::post('/sent-email', [EmailController::class, 'sendMail'])->name('sendMail');


// Email Fetch from mailbox
Route::get('/fetch-email', [EmailFetchController::class, 'index'])->name('fetchEmail');


