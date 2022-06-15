<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EducationCenterController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\HomeController;
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

Auth::routes();
Route::get('/',[AdminController::class, 'homePage'])->name('main');
Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('/education', EducationCenterController::class);
        Route::resource('/subject', SubjectController::class);
        Route::put('/profile/update', [AdminController::class, 'profileUpdate'])->name('profile.update');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::resource('/news', NewsController::class);
        Route::get('/search',[AdminController::class,'search'])->name('search');
    });

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search',[AdminController::class, 'home_search'])->name('search');
