<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
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
    return ['Laravel' => app()->version()];
});

// Rutas de autenticación
require __DIR__.'/auth.php';

// Rutas para Leads
Route::get('/leads/{id}', [LeadController::class, 'show'])->name('leads.show');
Route::get('/leads/{id}/edit', [LeadController::class, 'edit'])->name('leads.edit');
Route::put('/leads/{id}', [LeadController::class, 'update'])->name('leads.update');

