<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin'],function() {
    Route::get('/quanlive', [AdminController::class , 'index']);
});


Route::get('/', [HomePageController::class , 'index']);
Route::get('/lich-trinh', [HomePageController::class , 'lichTrinh']);
Route::get('/lien-he', [HomePageController::class , 'lienHe']);
Route::get('/chi-tiet', [HomePageController::class , 'chiTiet']);
Route::get('/ve-chung-toi', [HomePageController::class , 'chungToi']);

Route::group(['prefix' => '/client'],function() {

});
