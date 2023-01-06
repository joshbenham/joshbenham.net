<?php

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

Route::get('/', \App\Http\Livewire\Home::class)->name('home');
Route::get('/resume', \App\Http\Livewire\Resume::class)->name('resume');
Route::get('/uses', \App\Http\Livewire\Uses::class)->name('uses');
Route::get('/goals', \App\Http\Livewire\Goals::class)->name('goals');
Route::get('/contact', \App\Http\Livewire\Contact::class)->name('contact');
