<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Index
Route::view('/','home');
// Contacts Page
Route::view('/contact','contact');

Route::resource('jobs', JobController::class);
