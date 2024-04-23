<?php

use App\Livewire\Beasiswa\BeasiswaIndex;
use App\Livewire\Fakultas\FakultasIndex;
use App\Livewire\Jadwal\JadwalIndex;
use App\Livewire\PenggunaIndex;
use App\Livewire\Prodi\ProdiIndex;
use App\Livewire\User\UserIndex;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

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

Route::view('/', 'welcome')->name('welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/pengguna', UserIndex::class)
    ->middleware(['auth'])
    ->name('user.index');

Route::get('/jadwal', JadwalIndex::class)
    ->middleware(['auth'])
    ->name('jadwal.index');

Route::get('/fakultas', FakultasIndex::class)
    ->middleware(['auth'])
    ->name('fakultas.index');

Route::get('/prodi', ProdiIndex::class)
    ->middleware(['auth'])
    ->name('prodi.index');

Route::get('/beasiswa', BeasiswaIndex::class)
    ->middleware(['auth'])
    ->name('beasiswa.index');

require __DIR__ . '/auth.php';
