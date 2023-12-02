<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ScheduleController;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

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
//     return view('pages/assessment/index');
// });

Route::post('result/insert',[ResultController::class,'insert'])->name('result.insert');

Route::middleware('guest')->group(function(){
   
    Route::post('/auth/attempt_login',[LoginController::class,'attemptLogin'])->name('auth.attempt_login');
   
   
});

Route::middleware('auth')->group(function(){
    Route::controller(ReferenceController::class)->group(function () {
     
        Route::get('/get_officer', 'getOfficer')->name('reference.get_officer');
        Route::post('/insert_officer', 'insertOfficer')->name('reference.insert_officer');
        Route::post('/destroy_officer', 'destroyOfficer')->name('reference.destroy_officer');
        Route::get('/get_signer', 'getSigner')->name('reference.get_signer');
        Route::post('/insert_signer', 'insertSigner')->name('reference.insert_signer');
        Route::post('/destroy_signer', 'destroySigner')->name('reference.destroy_signer');
        Route::get('/get_user', 'getUser')->name('reference.get_user');
        Route::post('/destroy_user', 'destroyUser')->name('reference.destroy_user');
        Route::post('/insert_user', 'insertUser')->name('reference.insert_user');
        Route::post('/edit_user', 'editUser')->name('reference.edit_user');
        
    });
    Route::controller(ResultController::class)->group(function () {
     
        Route::get('/get_result', 'getResult')->name('result.get_result');
        Route::post('/print_report', 'printReport')->name('result.print_report');
      
        
    });
    Route::controller(LoginController::class)->group(function () {
     
        Route::get('/logout', 'logout');
      
        
    });
    
});