<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Route::resource('/employee',EmployeeController::class) 

// Route::get('/employee',[EmployeeController::class ,'index']);
Route::resource('/employee' , EmployeeController::class)->middleware(['auth']);

// Route::get('/employee', [EmployeeController::class, 'index']);
// Route::get('/employee/create', [EmployephpeController::class, 'create']);
// Route::post('/employee', [EmployeeController::class, 'store']);

Route::put('/update',[MemberController::class,'store']);
Route::get('/cache',[MemberController::class,'cache']);
Route::get('/get_cache',[MemberController::class,'get']);