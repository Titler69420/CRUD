<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crudTable', [CrudController::class, 'index'])->name('crud.index');
Route::get('/crudTable/create', [CrudController::class, 'create'])->name('crud.create');
Route::post('/crudTable', [CrudController::class, 'store'])->name('crud.store');
