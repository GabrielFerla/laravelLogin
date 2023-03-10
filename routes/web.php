<?php

use App\Http\Livewire\CreateBook;
use App\Http\Livewire\EditBook;
use App\Http\Livewire\ShowBooks;
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/book', ShowBooks::class);
    Route::get('/book/add', CreateBook::class);
    Route::get('/book/edit/{book}', EditBook::class);

});
