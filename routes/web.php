<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\School\DashboardController as SchoolDashboardController;
use App\Http\Controllers\School\IDController;
use App\Http\Controllers\School\TransactionController;
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
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::prefix('auth')->name('auth.')->group(function () {
        Route::post('/login', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('school')->name('school.')->group(function () {
        Route::controller(SchoolDashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });
        Route::prefix('/transaction')->name('transaction.')->group(function () {
            Route::controller(TransactionController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::delete('{id}/delete', 'destroy')->name('delete_transaction_record');
            });
        });
        Route::prefix('/create')->name('create_id.')->group(function () {
            Route::controller(IDController::class)->group(function () {
                Route::get('/identification-card', 'index')->name('index');

            });
            Route::controller(CollegeController::class)->group(function () {
                Route::post('/college/store', 'store')->name('student');
            });
        });
    });
});