<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TutorialController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[TutorialController::class, 'Index']);
Route::get('/contact',[MainController::class, 'Contact']);
Route::get('/register',[MainController::class, 'Register']);
Route::post('/reg',[MainController::class, 'Registeration']);
Route::get('/Login',[MainController::class, 'Login']);
Route::get('/tutorials',[MainController::class, 'tutorials']);
Route::get('/Logout',[MainController::class, 'Logout']);
Route::post('/login1',[MainController::class, 'login1']);
Route::post('/CreateTutorials',[TutorialController::class, 'CreateTutorials']);

