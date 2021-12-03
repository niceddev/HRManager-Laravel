<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\Auth\LoginUserController;
use App\Http\Controllers\Auth\LoginCompanyController;
use App\Http\Controllers\Auth\RegisterCompanyController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;

//Route::view('/', HomeController::class); ------->> Randomize images by VueJS later
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware('guest')->group(function(){
    Route::group(['prefix' => 'login', 'as' => 'login.'], function(){
        Route::get('user', [LoginUserController::class, 'create'])->name('user.create');
        Route::post('user', [LoginUserController::class, 'store'])->name('user.store');
        Route::get('company', [LoginCompanyController::class, 'create'])->name('company.create');
        Route::post('company', [LoginCompanyController::class, 'store'])->name('company.store');
    });
    Route::group(['prefix' => 'register', 'as' => 'register.'], function(){
        Route::get('user', [RegisterUserController::class, 'create'])->name('user.create');
        Route::post('user', [RegisterUserController::class, 'store'])->name('user.store');
        Route::get('company', [RegisterCompanyController::class, 'create'])->name('company.create');
        Route::post('company', [RegisterCompanyController::class, 'store'])->name('company.store');
    });
});
Route::middleware('auth')->group(function(){
    Route::group(['prefix' => 'user', 'as' => 'user.'],function(){
        Route::resource('resume', ResumeController::class);
    });
    Route::group(['prefix' => 'company', 'as' => 'company.'],function(){
        Route::resource('vacancy', VacancyController::class);
    });
});

Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
