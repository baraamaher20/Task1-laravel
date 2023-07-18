<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('blog')->name('blog.')->group(function() {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/about', [BlogController::class, 'about'])->name('about');
    Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
    Route::get('/post', [BlogController::class, 'post'])->name('post');
});

Route::get('form1', [FormController::class, 'form1'])->name('form1');
Route::post('form1', [FormController::class, 'form1_data'])->name('form1_data');


Route::get('/form2', [FormController::class, 'form2'])->name('form2');
Route::post('/form2', [FormController::class, 'form2_data'])->name('form2_data');

Route::get('/form3', [FormController::class, 'form3'])->name('form3');
Route::post('/form3', [FormController::class, 'form3_data'])->name('form3_data');

Route::get('/form4', [FormController::class, 'form4'])->name('form4');
Route::post('/form4', [FormController::class, 'form4_data'])->name('form4_data');

Route::get('/form5', [FormController::class, 'form5'])->name('form5');
Route::post('/form5', [FormController::class, 'form5_data'])->name('form5_data');
