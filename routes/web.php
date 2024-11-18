<?php

use App\Http\Controllers\AjoutDesAmisController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AmisSuggererController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');

});
// Routes de connexion et d'inscription protégées par le middleware 'guest'
Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return Inertia::render('Login');
    })->name('login');

    Route::get('/register', function () {
        return Inertia::render('Register');
    })->name('register');

    Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    Route::post('/register', [RegisteredUserController::class, 'store']);
});

// Routes accessibles uniquement pour les utilisateurs authentifiés
Route::middleware(['auth'])->group(function () {
    Route::get('/ajoutdesamis', [AjoutDesAmisController::class, 'index'])->name('ajoutdesamis');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile', [ProfileController::class, 'update'])->name('profile.update');


Route::get('/ajoutdesamis', [AjoutDesAmisController::class, 'index'])->name('ajoutdesamis');
Route::get('/suggestion-des-amis', [AmisSuggererController::class, 'index'])->name('suggestion-des-amis');
Route::get('/confirmation-des-amis', [AmisSuggererController::class, 'confirmation'])->name('confirmation-des-amis');
Route::get('/friends', [FriendController::class, 'index'])->name('friends');


// Route::middleware(['auth'])->group(function () {
    Route::get('/ajout-des-amis', [FriendController::class, 'index'])->name('friends.index');
    Route::post('/friends/send-request', [FriendController::class, 'sendFriendRequest'])->name('friends.sendRequest');
    // Ajoutez d'autres routes pour accepter et supprimer des amis
// });