<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildController;

Route::get('/building/{room?}', [BuildController::class, 'index']);