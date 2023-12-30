<?php

use App\Http\Controllers\electronicsController;
use App\Models\Electronic;
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
    return view('welcome');
});

Route::get('/electronics', function () {
    return Electronic::get();
});

// FOR INSERTING DATA INTO DATABASE THROUGH ROUTING.

// Route::get('/electronics/create', function () {
//     return Electronic::create([
//         'name'=>'dell',
//         'electronic_category'=>'laptop',
//         'description'=>'dell company laptop',
//         'is_available'=>1,
//         'price'=>125000,
//     ]);
// });

Route::get('/electronics/create',[electronicsController::class,'create']);
Route::post('/electronics/store',[electronicsController::class,'store']);
