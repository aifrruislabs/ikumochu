<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DatasetController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Upload Dataset
Route::post('/upload/dataset', [DatasetController::class, 'upload_dataset'])->name('upload-dataset');

//Dataset
Route::get('/datasets', [Controller::class, 'datasets']);

//Dataset Contexts
Route::get('/dataset/contexts', [Controller::class, 'dataset_contexts']);

//Process Dataset
Route::get('/process/dataset',  [Controller::class, 'process_dataset']);

//Dashboard Page
Route::get('/dashboard', [Controller::class, 'dashboard']);

//Login Page
Route::get('/login', [Controller::class, 'login']);

//logout
Route::get('/logout', [Controller::class, 'postLogout']);

//Post Login
Route::post('/postLogin', [Controller::class, 'postLogin'])->name('postLogin');

//Index Page
Route::get('/', [Controller::class, 'index']);
