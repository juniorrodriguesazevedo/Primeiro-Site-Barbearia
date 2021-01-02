<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbeariaController;

Route::get('/', [BarbeariaController::class, 'index']);

Route::get('/contato', [BarbeariaController::class, 'contato']);