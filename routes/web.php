<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\HomeController;



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



// Route::get('/products/{name}', [ProductController::class, 'show']);
//Route::get('register', [PageController::class, 'register']);
Route::get('login', [PageController::class, 'login']);
Route::get('/studentlogin', [PageController::class, 'studentlogin']);
Route::get('/project', [PageController::class, 'viewproject']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->middleware('auth');
Route::get('users', [PageController::class, 'viewUser'])->middleware('auth');
Route::get('/getProject', [PageController::class, 'getProject']);
//Route::post('sessions', [AdminController::class, 'loginadmin']);
//Route::get('user', [AdminController::class, 'test']);
Route::post('/sessions', [HomeController::class, 'loginadmin']);

Route::post('/studentsessions', [StudentController::class, 'loginstudent']);
Route::post('/createproject', [StudentController::class, 'createProject']);
Route::post('/updateprojectstatus', [StudentController::class, 'updateStatus']);
Route::post('/updatestudent', [StudentController::class, 'updatestudent']);


Route::post('/logout', [HomeController::class, 'logoutadmin']);


Route::get('/viewProject/{id}', [StudentController::class, 'userProject']);

Route::get('/student/{id}', [StudentController::class, 'showStudent']);


Route::resource('/', StudentController::class);








