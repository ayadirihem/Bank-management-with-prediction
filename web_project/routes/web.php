<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ChurnPredictionController;
use App\Http\Controllers\Employer\DashboardController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\LoginController;
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
Route::resource("Clients", ClientController::class);
Route::resource("BankCustomerPrediction", ChurnPredictionController::class);
Route::put('Clients.update', [ClientController::class, 'update']);

/*
Route::get('/', function () {
    return view('welcome');
});
*/




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Deuxieme partie 
|
*/

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');


    return "Cleared!";
});


Route::get('/', [LoginController::class, 'getLogin']);
Route::post('/login', [LoginController::class, 'postLogin']);
Route::post('login.enter', [LoginController::class, 'postLogin']);
Route::get('/noPermission', function() {
    return view('noPermission');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/Edit', function () {
        return view('admin.Edit');
    });
    Route::get('/admin/BankCustomerChurnPrediction', function () {
        return view('admin.BankCustomerPrediction');
    });
    
    Route::resource('/admin/Clients', ClientController::class);
    Route::resource('/admin/BankCustomerPrediction', ChurnPredictionController::class);
    Route::get('/logout', [LoginController::class, 'getLogout'])->name('logout');
    Route::put('employer.update', [EmployerController::class, 'update']);

Route::group(['prefix' => 'panel/'], function () {    
    
    // dashboard Routes     
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('employer.dashboard');

    Route::resource("employer", EmployerController::class);     
    // Activate & disable Employer 
    Route::get('employer/enable/{id}', [EmployerController::class, 'enable'])->name('employer.enable');
    Route::get('employer/disable/{id}', [EmployerController::class, 'disable'])->name('employer.disable');
     
   
    
});


 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
