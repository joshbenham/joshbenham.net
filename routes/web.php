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

Route::get('/', \App\Http\Livewire\HomePage::class)->name('home');
Route::get('/resume', \App\Http\Livewire\ResumePage::class)->name('resume');
Route::get('/uses', \App\Http\Livewire\UsesPage::class)->name('uses');
Route::get('/goals', \App\Http\Livewire\GoalsPage::class)->name('goals');
Route::get('/contact', \App\Http\Livewire\ContactPage::class)->name('contact');
Route::get('/sitemap.xml', fn () => response()->view('sitemap')->header('Content-Type', 'application/xml'))->name('sitemap');
