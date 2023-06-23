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

// Route::get('/', function () {
//     return view('home');
// });

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
Route::get('/rodzicemodule/list', [RodzicController::class,'index'])-> middleware('auth');
Route::get('/rodzicemodule/add', [RodzicController::class,'create'])-> middleware('auth');
Route::post('/rodzicemodule/save', [RodzicController::class,'store'])-> middleware('auth');
Route::get('/rodzicemodule/edit/{id}', [RodzicController::class,'edit'])-> middleware('auth');
Route::post('/rodzicemodule/update/{id}', [RodzicController::class,'update']);
Route::get('/rodzicemodule/show/{id}', [RodzicController::class,'show']);
Route::post('/rodzicemodule/delete/{id}', [RodzicController::class,'destroy'])-> middleware('auth');
Route::get('/rodzicemodule/dzieci/{id}', [RodzicController::class, 'Dzieci']);
Route::get('/rodzicemodule/loguj', [RodzicController::class,'zmienStanUwierzytelnienia']);
Route::get('/rodzicemodule/wyloguj', [RodzicController::class,'zmienStanUwierzytelnienia']);
// dziecko
Route::get('/dziecimodule/list', [DzieckoController::class,'index'])-> middleware('auth');
Route::get('/dziecimodule/add', [DzieckoController::class,'create'])-> middleware('auth');
Route::post('/dziecimodule/save', [DzieckoController::class,'store'])-> middleware('auth');
Route::get('/dziecimodule/edit/{id}', [DzieckoController::class,'edit'])-> middleware('auth');
Route::post('/dziecimodule/update/{id}', [DzieckoController::class,'update']);
Route::get('/dziecimodule/show/{id}', [DzieckoController::class,'show']);
Route::post('/dziecimodule/delete/{id}', [DzieckoController::class,'destroy'])-> middleware('auth');
Route::get('/dziecimodule/loguj', [DzieckoController::class,'zmienStanUwierzytelnienia']);
Route::get('/dziecimodule/wyloguj', [DzieckoController::class,'zmienStanUwierzytelnienia']);
//opiekun
Route::get('/opiekunimodule/list', [OpiekunController::class,'index'])-> middleware('auth');
Route::get('/opiekunimodule/add', [OpiekunController::class,'create'])-> middleware('auth');
Route::post('/opiekunimodule/save', [OpiekunController::class,'store'])-> middleware('auth');
Route::get('/opiekunimodule/edit/{id}', [OpiekunController::class,'edit'])-> middleware('auth');
Route::post('/opiekunimodule/update/{id}', [OpiekunController::class,'update']);
Route::get('/opiekunimodule/show/{id}', [OpiekunController::class,'show']);
Route::post('/opiekunimodule/delete/{id}', [OpiekunController::class,'destroy'])-> middleware('auth');
Route::get('/opiekunimodule/loguj', [OpiekunController::class,'zmienStanUwierzytelnienia']);
Route::get('/opiekunimodule/wyloguj', [OpiekunController::class,'zmienStanUwierzytelnienia']);
//zlecenia
Route::get('/zleceniemodule/list', [ZlecenieController::class,'index'])-> middleware('auth');
Route::get('/zleceniemodule/add', [ZlecenieController::class,'create'])-> middleware('auth');
Route::post('/zleceniemodule/save', [ZlecenieController::class,'store'])-> middleware('auth');
Route::get('/zleceniemodule/edit/{id}', [ZlecenieController::class,'edit'])-> middleware('auth');
Route::post('/zleceniemodule/update/{id}', [ZlecenieController::class,'update']);
Route::get('/zleceniemodule/show/{id}', [ZlecenieController::class,'show']);
Route::post('/zleceniemodule/delete/{id}', [ZlecenieController::class,'destroy'])-> middleware('auth');
Route::get('/zleceniemodule/loguj', [ZlecenieController::class,'zmienStanUwierzytelnienia']);
Route::get('/zleceniemodule/wyloguj', [ZlecenieController::class,'zmienStanUwierzytelnienia']);
//rozliczenia
Route::get('/rozliczeniamodule/list', [RozliczeniaController::class,'index'])-> middleware('auth');
Route::get('/rozliczeniamodule/add', [RozliczeniaController::class,'create'])-> middleware('auth');
Route::post('/rozliczeniamodule/save', [RozliczeniaController::class,'store'])-> middleware('auth');
Route::get('/rozliczeniamodule/edit/{id}', [RozliczeniaController::class,'edit'])-> middleware('auth');
Route::post('/rozliczeniamodule/update/{id}', [RozliczeniaController::class,'update']);
Route::get('/rozliczeniamodule/show/{id}', [RozliczeniaController::class,'show']);
Route::post('/rozliczeniamodule/delete/{id}', [RozliczeniaController::class,'destroy'])-> middleware('auth');
Route::get('/rozliczeniamodule/loguj', [RozliczeniaController::class,'zmienStanUwierzytelnienia']);
Route::get('/rozliczeniamodule/wyloguj', [RozliczeniaController::class,'zmienStanUwierzytelnienia']);

Route::get('/loguj', [HomeController::class,'zmienStanUwierzytelnienia']);
Route::get('/wyloguj', [HomeController::class,'zmienStanUwierzytelnienia']);
require __DIR__.'/auth.php';