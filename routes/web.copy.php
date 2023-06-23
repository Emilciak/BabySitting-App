<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RodzicController;
use App\Http\Controllers\DzieckoController;
use App\Http\Controllers\OpiekunController;
use App\Http\Controllers\ZlecenieController;
use App\Http\Controllers\RozliczeniaController;

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
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
Route::get('/', [HomeController::class,'index']);

//rodzic
Route::get('/rodzicemodule/list', [RodzicController::class,'index']);
Route::get('/rodzicemodule/add', [RodzicController::class,'create']);
Route::post('/rodzicemodule/save', [RodzicController::class,'store']); 
Route::get('/rodzicemodule/edit/{id}', [RodzicController::class,'edit']); 
Route::post('/rodzicemodule/update/{id}', [RodzicController::class,'update']);
Route::get('/rodzicemodule/show/{id}', [RodzicController::class,'show']);
Route::post('/rodzicemodule/delete/{id}', [RodzicController::class,'destroy']);

// dziecko
Route::get('/dziecimodule/list', [DzieckoController::class,'index']);
Route::get('/dziecimodule/add', [DzieckoController::class,'create']);
Route::post('/dziecimodule/save', [DzieckoController::class,'store']); 
Route::get('/dziecimodule/edit/{id}', [DzieckoController::class,'edit']); 
Route::post('/dziecimodule/update/{id}', [DzieckoController::class,'update']);
Route::get('/dziecimodule/show/{id}', [DzieckoController::class,'show']);
Route::post('/dziecimodule/delete/{id}', [DzieckoController::class,'destroy']);

//opiekun
Route::get('/opiekunimodule/list', [OpiekunController::class,'index']);
Route::get('/opiekunimodule/add', [OpiekunController::class,'create']);
Route::post('/opiekunimodule/save', [OpiekunController::class,'store']); 
Route::get('/opiekunimodule/edit/{id}', [OpiekunController::class,'edit']); 
Route::post('/opiekunimodule/update/{id}', [OpiekunController::class,'update']);
Route::get('/opiekunimodule/show/{id}', [OpiekunController::class,'show']);
Route::post('/opiekunimodule/delete/{id}', [OpiekunController::class,'destroy']);

//zlecenia
Route::get('/zleceniemodule/list', [ZlecenieController::class,'index']);
Route::get('/zleceniemodule/add', [ZlecenieController::class,'create']);
Route::post('/zleceniemodule/save', [ZlecenieController::class,'store']); 
Route::get('/zleceniemodule/edit/{id}', [ZlecenieController::class,'edit']); 
Route::post('/zleceniemodule/update/{id}', [ZlecenieController::class,'update']);
Route::get('/zleceniemodule/show/{id}', [ZlecenieController::class,'show']);
Route::post('/zleceniemodule/delete/{id}', [ZlecenieController::class,'destroy']);

//rozliczenia
Route::get('/rozliczeniamodule/list', [RozliczeniaController::class,'index']);
Route::get('/rozliczeniamodule/add', [RozliczeniaController::class,'create']);
Route::post('/rozliczeniamodule/save', [RozliczeniaController::class,'store']); 
Route::get('/rozliczeniamodule/edit/{id}', [RozliczeniaController::class,'edit']); 
Route::post('/rozliczeniamodule/update/{id}', [RozliczeniaController::class,'update']);
Route::get('/rozliczeniamodule/show/{id}', [RozliczeniaController::class,'show']);
Route::post('/rozliczeniamodule/delete/{id}', [RozliczeniaController::class,'destroy']);