<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::middleware('auth:api')->get('/user', fn(Request $request) => $request->user());
