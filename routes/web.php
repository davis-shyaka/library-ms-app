<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Imports
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Route::group(['middleware' => ['is_admin']], function () {

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::resource('tasks', TaskController::class);

    Route::resource('authors', AuthorController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
    Route::resource('borrowedBooks', BorrowedBookController::class);
    Route::resource('tasks', TaskController::class);
    Route::resource('users', UserController::class);

    Route::post('/search', [BookController::class, 'search'])->name('books.search');
    Route::post('/usersSearch', [UserController::class, 'search'])->name('users.search');
    Route::post('/usersSearch', [UserController::class, 'search'])->name('users.search');
    Route::post('/editRole', [UserController::class, 'editRole'])->name('users.editRole');
    Route::post('/students', [UserController::class, 'students'])->name('users.students');
    Route::post('/librarians', [UserController::class, 'librarians'])->name('users.librarians');
    Route::post('/directors', [UserController::class, 'directors'])->name('users.directors');
    Route::post('/superAdmins', [UserController::class, 'superAdmins'])->name('users.superAdmins');
    Route::post('/borrowedBookSearch', [BorrowedBookController::class, 'search'])->name('borrowedBooks.search');
    // });
});

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

require __DIR__ . '/auth.php';
