<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\boilerplate\EmployeeController;


Route::middleware('auth')->group(function () {
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
    Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
});