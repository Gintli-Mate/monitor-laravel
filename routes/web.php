<?php

use App\Http\Controllers\MonitorController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', '/monitors');
Route::resource('monitors', MonitorController::class);