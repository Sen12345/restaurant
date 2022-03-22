<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
//     return view('welcome');
// });

Route::get("/",[App\Http\Controllers\HomeController::class, 'index'])->name('/');

Route::get('/createchef',[App\Http\Controllers\AdminController::class, 'createchef']);
Route::post('/storechef',[App\Http\Controllers\AdminController::class, 'storechef']);


Route::get('/chefs',[App\Http\Controllers\AdminController::class, 'chefs']);
Route::get('/chef/{id}',[App\Http\Controllers\AdminController::class, 'destroychef']);
Route::get('/editchef/{id}',[App\Http\Controllers\AdminController::class, 'editchef']);
Route::post('/updatechef/{id}',[App\Http\Controllers\AdminController::class, 'updatechef']);

Route::get('/reservation',[App\Http\Controllers\AdminController::class, 'reserve']);
Route::post('/reservation',[App\Http\Controllers\AdminController::class, 'reservation']);

Route::get("/users", [App\Http\Controllers\AdminController::class, 'users']);
Route::get("/foodmenu", [App\Http\Controllers\AdminController::class, 'foodmenu']);
Route::post("/foodmenu", [App\Http\Controllers\AdminController::class, 'foodstore']);
Route::get('/deletemenu/{id}',[App\Http\Controllers\AdminController::class, 'deletemenu']);
Route::get('/updatemenu/{id}',[App\Http\Controllers\AdminController::class, 'updatemenu']);
Route::post('/updatemenu/{id}',[App\Http\Controllers\AdminController::class, 'update']);
Route::get('/orders',[App\Http\Controllers\AdminController::class, 'orders']);
Route::get('/search',[App\Http\Controllers\AdminController::class, 'search']);
Route::get('/delete/{id}',[App\Http\Controllers\AdminController::class, 'destroy']);

Route::get('/confirmorder',[App\Http\Controllers\HomeController::class, 'reserve']);
Route::post('/confirmorder',[App\Http\Controllers\HomeController::class, 'confirmorder']);
Route::get("/admins", [App\Http\Controllers\HomeController::class, 'admins'])->name('admins');
Route::post('/addtocart/{id}',[App\Http\Controllers\HomeController::class, 'addtocart']);

Route::get('/showcart/{id}',[App\Http\Controllers\HomeController::class, 'showcart']);
Route::get('/remove/{id}',[App\Http\Controllers\HomeController::class, 'remove'])->name('remove');

Route::get('/createBreakfast',[App\Http\Controllers\BreakfastController::class, 'createBreakfast'])->name('createBreakfast');
Route::post('/createBreakfast',[App\Http\Controllers\BreakfastController::class, 'store']);

Route::get('/viewBreakfast',[App\Http\Controllers\BreakfastController::class, 'viewBreakfast'])->name('viewBreakfast');

Route::get('/updateBreakfast/{id}',[App\Http\Controllers\BreakfastController::class, 'updateBreakfast'])->name('updateBreakfast');
Route::post('/updateBreakfast/{id}',[App\Http\Controllers\BreakfastController::class, 'update']);
Route::get('/deleteBreakfast/{id}',[App\Http\Controllers\BreakfastController::class, 'deleteBreakfast'])->name('deleteBreakfast');


Route::get('/createLunch',[App\Http\Controllers\LunchController::class, 'createLunch'])->name('createLunch');
Route::post('/createLunch',[App\Http\Controllers\LunchController::class, 'store']);

Route::get('/viewLunch',[App\Http\Controllers\LunchController::class, 'viewLunch'])->name('viewLunch');

Route::get('/updateLunch/{id}',[App\Http\Controllers\LunchController::class, 'updateLunch'])->name('updateLunch');
Route::post('/updateLunch/{id}',[App\Http\Controllers\LunchController::class, 'update']);
Route::get('/deleteLunch/{id}',[App\Http\Controllers\LunchController::class, 'deleteLunch'])->name('deleteLunch');

Route::get('/createDinner',[App\Http\Controllers\DinnerController::class, 'createDinner'])->name('createDinner');
Route::post('/createDinner',[App\Http\Controllers\DinnerController::class, 'store']);

Route::get('/viewDinner',[App\Http\Controllers\DinnerController::class, 'viewDinner'])->name('viewDinner');

Route::get('/updateDinner/{id}',[App\Http\Controllers\DinnerController::class, 'updateDinner'])->name('updateDinner');
Route::post('/updateDinner/{id}',[App\Http\Controllers\DinnerController::class, 'update']);
Route::get('/deleteDinner/{id}',[App\Http\Controllers\DinnerController::class, 'deleteDinner'])->name('deleteDinner');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link'); // this will do the command line job
});
