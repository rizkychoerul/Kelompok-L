<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\LoginFormController;
use App\Http\Controllers\MediaCetak;
use App\Http\Controllers\MediaCetakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\usersController;
use App\Livewire\Forms\LoginForm;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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
    return view('auth.login');
});

Route::get('/dashboard', [MediaCetakController::class, 'dash'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/poster', [MediaCetakController::class, 'poster'])->name('poster');

Route::get('/leaflet', [MediaCetakController::class, 'leaflet'])->name('leaflet');

Route::get('/users', [usersController::class, 'user'])->name('users');

Route::get('/insertusers', [usersController::class, 'insertuser'])->name('insertusers');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('lecturer')
    ->name('lecturer.')
    ->group(function() {
        Route::get('/', [LecturerController::class, 'index'])->name('index');
});

// Route::get('/coba', function () {
//     return view('CobaChild');
// });

Route::get('/loginform', [LoginFormController::class, 'login']);
Route::post('/loginform', [LoginFormController::class, 'authenticate']);

Route::get('/mediacetak', [MediaCetakController::class, 'dashboard']);

require __DIR__.'/auth.php';
