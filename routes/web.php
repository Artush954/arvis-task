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
Route::get('/','PagesController@index')->name('index');
/* Company Controller*/
Route::get('company','CompanyController@index')->name('company.index');
Route::get('company/create','CompanyController@create')->name('company.create');
Route::post('company/create','CompanyController@store' )->name('company.store');

/* Branch Controller*/
Route::get('branch/{id}','BranchController@index' )->name('branch.index');
Route::get('branch/create/{id}','BranchController@create' )->name('branch.create');
Route::post('branch/create/','BranchController@store' )->name('branch.store');

/*Employee controller*/
route::get('employee/{id}','EmployeeController@index')->name('employee.index');
route::get('employee/create/{branch_id}','EmployeeController@create')->name('employee.create');
route::post('employee/create/','EmployeeController@store')->name('employee.store');
