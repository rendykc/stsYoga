<?php
use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeontroller;
use App\Http\Controllers\projectController;
use Illuminate\Support\Facades\Route;


Route::get('/project', [projectController::class, 'project']);
Route::get('/home', [homeController::class, 'home']);
Route::get('/contact', [contactController::class, 'contact']);
Route::get('/about', [aboutController::class, 'about'])->name( 'about');