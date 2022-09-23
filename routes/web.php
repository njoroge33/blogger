<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ArticlesController;
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
    return view('frontend.home');
});

Route::prefix('backend')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('payments');

    Route::prefix('blogs')->group(function () {
        Route::get('index', [ArticlesController::class, 'index'])->name('blogs.index');
        Route::get('create', [ArticlesController::class, 'create'])->name('blogs.create');
        Route::get('edit/{id}', [ArticlesController::class, 'edit'])->name('blogs.edit');
        Route::post('update/{id}', [ArticlesController::class, 'update'])->name('blogs.update');
        Route::post('store', [ArticlesController::class, 'store'])->name('blogs.store');
    });
});
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/portfolio', [App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');
