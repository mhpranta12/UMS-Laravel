<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () 
{
Route::get('/addemployee', function () {
    return view('addEmployee');
});

Route::post('/addemployee',"EmployeeController@createEmployee");
Route::get('/employee',"EmployeeController@getAllEmployee");
Route::post('/employee',"EmployeeController@searchEmployee");

Route::get('/employee/update/{id}','EmployeeController@updateEmployeeDetails');
Route::post('/employee/update/{id}','EmployeeController@updateEmployee');
Route::get('/employee/delete/{id}','EmployeeController@deleteEmployee');
});

