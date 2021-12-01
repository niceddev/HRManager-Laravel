<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResumeController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\LoginCompanyController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\RegisterCompanyController;
use App\Http\Controllers\HomeController;


//Route::view('/', HomeController::class); ------->> Randomize images by VueJS later
Route::get('/', [HomeController::class, 'index'])->name('layouts.home');
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
//Route::prefix('user')->group(function (){
//    Route::resource('resume', ResumeController::class);
//});
//Route::prefix('company')->group(function (){
//    Route::resource('vacancy', VacancyController::class);
//});
