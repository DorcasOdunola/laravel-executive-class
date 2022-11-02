<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TodosController;

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

// Route::get("/home", function (){
//     return view('home');
//     // return "You are Welcome!!";
// });

Route::get("/home", [UsersController::class, 'index']);

Route::get("/todos", [TodosController::class, 'index']);

Route::get("/addtodo", function (){
    return view ("todos.addtodo");
});