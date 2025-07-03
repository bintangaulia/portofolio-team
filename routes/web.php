<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\BiodataTeamController;

Route::get('/', [HomeContentController::class, 'index'])->name('home.index');
Route::get('/home/edit', [HomeContentController::class, 'edit'])->name('home.edit');
Route::post('/home/update', [HomeContentController::class, 'update'])->name('home.update');
Route::get('/about/edit', [AboutContentController::class, 'edit'])->name('about.edit');
Route::post('/about/update', [AboutContentController::class, 'update'])->name('about.update');
Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::post('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::delete('/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
Route::get('/profile/edit', [ProfileEditController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileEditController::class, 'update'])->name('profile.update');
Route::get('/biodata/team', [BiodataTeamController::class, 'index']);
