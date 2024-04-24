<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoTaskController;
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

//Route::get('/', [TodoTaskController::class, 'index'])->name('home');

//Route::get('/welcome', function () {
  //  return view('Welcome');
//});

//Route::post('/', function (Request $request) {
   // return ;$request-> task;
//});
Route::get('/',[TodoTaskController::class,'index']);
Route::post('/',[TodoTaskController::class,'tambah']);
Route::delete('/deleteTask/{id}', [TodoTaskController::class, 'deleteTask']);
// Route::post('/tambahTask', [TodoTaskController::class, 'addTask']);
// Route::get('/edit/{id}', [TodoTaskController::class, 'editTask']);
// Route::put('/updateTask', [TodoTaskController::class, 'updateTask']);
// Route::delete('/deleteTask/{id}', [TodoTaskController::class, 'deleteTask']);
// Route::get('/{id}', [TodoTaskController::class, 'showTask']);