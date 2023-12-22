<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('travel')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\TravelController::class, 'index'])->name('travel.index');
	Route::get('/view/{id}', [App\Http\Controllers\Admin\TravelController::class, 'view'])->name('travel.view');
	Route::get('/create', [App\Http\Controllers\Admin\TravelController::class, 'create'])->name('travel.create');
	Route::post('/store', [App\Http\Controllers\Admin\TravelController::class, 'store'])->name('travel.store');


});

Route::prefix('employee')->middleware(['auth'])->group(function(){
	Route::get('/', [App\Http\Controllers\Admin\EmployeeController::class, 'index'])->name('employee.index');
	Route::get('/create', [App\Http\Controllers\Admin\EmployeeController::class, 'create'])->name('employee.create');
	Route::post('/store', [App\Http\Controllers\Admin\EmployeeController::class, 'store'])->name('employee.store');
});