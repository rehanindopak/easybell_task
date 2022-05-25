<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

    // Custom Users Routes Start
    Route::get('custom_users_index', [CustomUserController::class, 'index'])->name('custom_users.index');
    Route::get('custom_users_add', [CustomUserController::class, 'add'])->name('custom_users.add');
    Route::post('custom_users_save', [CustomUserController::class, 'save'])->name('custom_users.save');
    Route::get('custom_users_edit/{id}', [CustomUserController::class, 'edit'])->name('custom_users.edit');
    Route::post('custom_users_update', [CustomUserController::class, 'update'])->name('custom_users.update');
    Route::put('custom_users_delete/{id}', [CustomUserController::class, 'delete'])->name('custom_users.delete');
     // Custom Users Routes END
