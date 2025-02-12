<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::prefix('tasks')->group(function () {
    
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');    
   
    Route::post('/', [TaskController::class, 'store']);
    
   
    Route::delete('/{task}', [TaskController::class, 'destroy']);
    
  
    Route::put('/{task}/complete', [TaskController::class, 'complete']);
});
