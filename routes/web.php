<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
//add product form
Route::get('/',[CrudController::class,"addProduct"]);
// addProduct
Route::post('/addProduct',[CrudController::class,"upProduct"]);

// View Page
Route::get('/view',[CrudController::class,"viewPage"]);

//delete data
Route::get('/del/{id}',[CrudController::class,"deleteData"]);
