<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('getdata', [DummyApi::class, 'index']);

Route::get('find/{id}', [DummyApi::class, 'find']);

Route::get('findopt/{id?}', [DummyApi::class, 'findopt']);

Route::post('add', [DummyApi::class, 'addData']);

Route::put('update', [DummyApi::class, 'updateData']);

Route::delete('delete/{id}', [DummyApi::class, 'deleteData']);

Route::get('search/{quest}', [DummyApi::class, 'searchData']);