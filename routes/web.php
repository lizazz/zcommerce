<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueueController;

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

require __DIR__.'/auth.php';
Route::get('/sqs/queue', '\App\Http\Controllers\QueueController@queue');
Route::resource('/sqs', QueueController::class);


Route::get('/', function () {
    return view('welcome');
});
