<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/users', [UserController::class, 'loadAllUsers']);
Route::get('/add/user', [UserController::class, 'loadAddUserForm']);

Route::post('/add/user', [UserController::class, 'AddUser']) ->name('addUser');

Route::get('/edit/{id}', [UserController::class, 'loadEditUserForm']);

Route::post('/edit/user', [UserController::class, 'EditUser']) ->name('editUser');


Route::get('/delete/{id}', [UserController::class, 'loadDeleteUser']);



