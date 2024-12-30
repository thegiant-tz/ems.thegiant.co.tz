<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RetirementController;

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

// Route::get('/', function () {
//     return view('login');
// })->name('welcome');

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/', [LoginController::class, 'index'])->name('welcome')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'account', 'as' => 'account.', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['prefix' => 'request', 'as' => 'request.'], function() {
        Route::get('initiate', [RequestController::class, 'initiateRequest'])->name('initiate');
        Route::get('list/{status?}', [RequestController::class, 'requestList'])->name('list');
        Route::get('attachments/{codeId}', [RequestController::class, 'requestAttachments'])->name('attachments');
        Route::post('store', [RequestController::class, 'storeRequest'])->name('store');
        Route::post('action', [RequestController::class, 'requestAction'])->name('action');
        Route::group(['prefix' => 'retirements', 'as' => 'retirements.'], function() {
            Route::get('/', [RetirementController::class, 'retirements'])->name('index');
            Route::post('store', [RetirementController::class, 'store'])->name('store');
        });
    });

    Route::group(['prefix' => 'users', 'as' => 'users.'], function() {
        Route::get('list/{filter?}', [UserController::class, 'list'])->name('list');
        Route::get('set-access/{userId}/{status}', [UserController::class, 'setAccess'])->name('access');
    });

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});