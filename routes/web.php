<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\testController;
Route::get('/students', [FormController::class, 'index']);
Route::post('/students', [FormController::class, 'store'])->name('students.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('hello');
});
Route::post('/addUser',[FormController::class,'addUser']);
Route::post('/student/store',[FormController::class,'store']);
Route::get('/form',[FormController::class,'index']);
Route::get('/student/delete/{id}',[FormController::class,'delete']);
Route::get('/edit/{id}',[FormController::class,'edit']);
Route::post('/student/update/{id}',[FormController::class,'update']);
Route::post('/test/store',[testController::class,'store']);
Route::get('/test/delete/{id}',[testController::class,'destroy']);
Route::get('/test',[testController::class,'test']);
Route::get('/user',[testController::class,'index'])->name('user');
Route::get('test/edit/{id}',[testController::class,'edit']);
Route::put('test/update/{id}',[testController::class,'update']);