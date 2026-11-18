<?php


// Make route employee 
// pel user jol tv route trov mean controller muy responsive 
//​​​ បើ User​ request ទៅ Route ​Controller និង call ហៅ method 'index'

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/employee', [EmployeeController::class, 'index'])
    ->name('employee.index');

Route::get('/employee/create', [EmployeeController::class, 'create'])
    ->name('employee.create');


Route::post('/employee/store', [EmployeeController::class, 'store'])
    ->name('employee.store');

Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']) 
    ->name('employee.edit');

Route::put('/employee/{employee}/update', [EmployeeController::class, 'update']) 
    ->name('employee.update');

Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])
    ->name('employee.destroy');