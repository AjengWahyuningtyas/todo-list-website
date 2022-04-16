<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

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

Route::get('/', [TodoListController::class, 'index'])->name('index-home');
// Route::get('/tambah-task', [TodoListController::class, 'addTask'])->name('add-task');
Route::post('/simpan-task', [TodoListController::class, 'saveTask'])->name('save-task');
Route::put('/{id}/update-task', [TodoListController::class, 'updateTask'])->name('update-task');
Route::post('/{id}/edit-task', [TodoListController::class, 'editTask'])->name('edit-task');
Route::post('/{id}/hapus-task', [TodoListController::class, 'deleteTask'])->name('delete-task');
