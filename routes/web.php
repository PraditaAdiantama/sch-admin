<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModifController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/students',[StudentController::class, 'index'])->name('students');
Route::get('/student/{student}',[StudentController::class, 'show'])->name('studentEdit');


Route::get('/modif/create',[StudentController::class,'create']);
Route::post('/modif/createData',[StudentController::class, 'createData']);

Route::get('/modif/editData/{edit}',[StudentController::class, 'edit']);
Route::post('/modif/editData/{edit}',[StudentController::class, 'editData']);

Route::get('/modif/delete/{id}',[StudentController::class, 'delete'])->name('delete');