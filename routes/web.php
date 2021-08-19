<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PermitController;
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

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/permits', [PermitController::class, 'permits'])->name('permits.permits');
    Route::post('/permits/application', [PermitController::class, 'application'])->name('permits.application');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function() {

        Route::resource('users', UserController::class);
        Route::resource('companies', CompanyController::class);
        Route::resource('companies.employees', EmployeeController::class);

    });

});
