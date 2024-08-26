<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TableMrrController;
use App\Http\Controllers\OtentikasiController;
use App\Http\Controllers\PDHourlyOutputControlller;
use App\Http\Controllers\UsersController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     return view('welcome');
// });
Route::get('/dashboard', function () {
    return view('index');
});

Route::get('/', [OtentikasiController::class, 'index']);
Route::post('/login', [OtentikasiController::class, 'login']);

// Route::get('/', [DashboardController::class,'dashboard']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/mrr', [TableMrrController::class, 'menuMrr']);
    Route::get('/edit/{id}', [TableMrrController::class, 'edit'])->name('mrr.edit');
    Route::put('/request/{id}', [TableMrrController::class, 'update'])->name('mrr.update');
    
    //Production Hourly Output Controller
    Route::resource('/pdhourlyoutput', PDHourlyOutputControlller::class);
});





