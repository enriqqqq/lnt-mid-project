<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\http\Controllers\EmployeeController;


// Get all entries
Route::get('/', [EmployeeController::class, 'index']);

// Update new entry
Route::put('/employees/{employee}', [EmployeeController::class, 'update']);

// Update new entry
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);

// Show create form
Route::get('/employees/create', [EmployeeController::class, 'create']);

// Store new entry
Route::post('/employees', [EmployeeController::class, 'store']);

// Show single entry
Route::get('/employees/{id}', [EmployeeController::class, 'show']);