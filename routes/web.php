<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::resource('tasks', TaskController::class);

// Imports
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])
        ->name('profile.update');


    Route::group(['middleware' => ['is_admin']], function () {

        // useless routes
        // Just to demo sidebar dropdown links active states.
        Route::get('/buttons/text', function () {
            return view('buttons-showcase.text');
        })->middleware(['auth'])->name('buttons.text');

        Route::get('/buttons/icon', function () {
            return view('buttons-showcase.icon');
        })->middleware(['auth'])->name('buttons.icon');

        Route::get('/buttons/text-icon', function () {
            return view('buttons-showcase.text-icon');
        })->middleware(['auth'])->name('buttons.text-icon');

        // Main Routes

        Route::resource('authors', AuthorController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('books', BookController::class);
        Route::resource('borrowedBooks', BorrowedBookController::class);
        Route::resource('tasks', TaskController::class);
        Route::resource('users', UserController::class);

        Route::post('/search', [BookController::class, 'search'])->name('books.search');
        Route::post('/borrowedBookSearch', [BorrowedBook::class, 'show'])->name('borrowedBooks.search');
    });
});

require __DIR__ . '/auth.php';
