<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/admin.php';

Route::get('/', [FrontendController::class, 'home'])->name('home');

Auth::routes();

// Frontend Routes
Route::get('about', function(){
    return view('frontend.about');
})->name('about');

Route::get('book', [FrontendController::class, 'indexBook'])->name('book.index');
Route::get('book/{book}', [FrontendController::class, 'showBook'])->name('book.show');
Route::get('category', [FrontendController::class, 'indexCategory'])->name('category.index');
Route::get('contacts', function(){
    return view('frontend.contact');
})->name('page.contact');

Route::resource('contact', ContactController::class);

Route::put('/user/{user}', [FrontendController::class, 'updateUser'])->name('user.update');
Route::get('/user/edit/{user}', [FrontendController::class, 'editUser'])->name('user.edit');
