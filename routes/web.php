<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Connict\Administrator\EducationController;
use App\Http\Controllers\Connict\TransactionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\School\CollegeIdController;
use App\Http\Controllers\School\IDController;
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
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });

        Route::prefix('/create')->name('create_id.')->group(function () {
            Route::get('/identification-card', IDController::class)->name('index');
            Route::controller(CollegeIdController::class)->group(function () {
                Route::post('/college/store', 'store')->name('college');
            });
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::prefix('connict')->name('connict.')->group(function () {
        Route::prefix('administrator')->name('administrator.')->group(function () {
            Route::prefix('education')->name('education.')->group(function () {
                Route::controller(EducationController::class)->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('/create', 'create')->name('create');
                    Route::post('/store', 'store')->name('store');
                    Route::put('/{education}/update', 'update')->name('update');
                    Route::get('/{education}/show', 'show')->name('show');
                    Route::delete('/{education}/delete', 'destroy')->name('destroy');
                });
            });
        });

        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
        });
        Route::prefix('/transaction')->name('transaction.')->group(function () {
            Route::controller(TransactionController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::delete('{id}/delete', 'destroy')->name('delete_transaction_record');
            });
        });
    });
});