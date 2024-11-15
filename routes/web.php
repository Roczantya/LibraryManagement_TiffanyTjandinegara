<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return view('welcome');
});
//Admin routes
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    // Add other admin routes here
});

// Librarian routes
Route::prefix('librarian')->middleware('auth')->name('librarian.')->group(function () {
    Route::get('dashboard', [LibrarianController::class, 'dashboard'])->name('dashboard');
    // Add other librarian routes here
});


Route::resource('/Books', \App\Http\Controllers\BookController::class);

Route::resource('/cds', \App\Http\Controllers\CDController::class);


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/add-librarian', [AdminController::class, 'addLibrarian'])->name('add_librarian');
    Route::delete('/delete-librarian/{id}', [AdminController::class, 'deleteLibrarian'])->name('delete_librarian');
    Route::post('/approve-book/{book_id}', [AdminController::class, 'approveBookRequest'])->name('approve_book_request');
});

Route::prefix('library')->name('library.')->group(function () {
    Route::get('/dashboard', [LibraryController::class, 'dashboard'])->name('dashboard');
    Route::get('/reminder', [LibraryController::class, 'reminder'])->name('reminder');
    Route::post('/update-book-status', [LibrarianController::class, 'updateBookStatus'])->name('update_book_status');
    Route::post('/reserve-book', [LibrarianController::class, 'reserveBook'])->name('reserve_book');
    Route::post('/approve-journal/{journal_id}', [LibrarianController::class, 'giveAccessToJournal'])->name('approve_journal');
});

// Route::resource('/Journals', \App\Http\Controllers\JournalController::class);

// Route::resource('/Newspapers', \App\Http\Controllers\NewspaperController::class);

// use App\Http\Controllers\LibraryController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth', 'admin'])->get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::middleware(['auth', 'librarian'])->get('/librarian/dashboard', [LibrarianController::class, 'index'])->name('librarian.dashboard');