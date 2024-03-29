<?php

use App\Http\Controllers\Admin\AdminController as AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DepartementController;
use App\Http\Controllers\Admin\DomaineController;
use App\Http\Controllers\Admin\ModerateurController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function () {
    // Inscription
    Route::get('/register', 'index')->name('register.index');
    Route::post('/register', 'store')->name('register.store');
    // Connexion
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'singIn')->name('singIn');
    // Deconnexion
    Route::get('/logout', 'logout')->name('logout');
    // Le profile
    Route::get('profile', 'show')->name('profile.show');
    Route::get('profile/{admin}/edit', 'edit')->name('profile.edit');
    Route::put('profile/{admin}', 'update')->name('profile.update');
    // Modification de mot de passe
    Route::get('edit-password/{admin}/edit', 'edit_password')->name('editPassword.edit');
    Route::put('edit-password/{admin}', 'update_password')->name('editPassword.update');
    // Changement de la photo de profile
    Route::put('change-avatar/{admin}', 'changeAvatar')->name('change.avatar');
});




Route::prefix('admin')->group(function () {
    Route::resource('departement', DepartementController::class);
    Route::resource('domaine', DomaineController::class);
    Route::resource('moderateur', ModerateurController::class);
});
