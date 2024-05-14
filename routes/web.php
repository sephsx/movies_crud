<?php
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('movies.index');
});

// Index route
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');

// Create route
Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');

// Store route
Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');

// Edit route
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');

// Update route
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');

// Destroy route
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

// Show route
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
