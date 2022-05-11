<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/rescue', function () {
    return view('rescue');
});
Route::get('espeleologia', function () {
    return view('espeleologia');
});
Route::get('eventos/opl', function () {
    return view('eventos.opl');
});
Route::get('eventos/pel', function () {
    return view('eventos.pel');
});
Route::get('eventos/proposta', function () {
    return view('eventos.proposta');
});
Route::get('eventos/congresso', function () {
    return view('eventos.congresso');
});
Route::get('/eventos/pdmlnh', function () {
    return view('eventos.pdmlnh');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/grutas/create', [App\Http\Controllers\GrutasController::class, 'create'])->name('grutas.create');
Route::post('/grutas', [App\Http\Controllers\GrutasController::class, 'store']);
Route::get('/grutas/{gruta}', [App\Http\Controllers\GrutasController::class, 'show']);
Route::put('/grutas/{gruta}', [App\Http\Controllers\GrutasController::class, 'update']);
Route::get('/grutas/edit/{gruta}', [App\Http\Controllers\GrutasController::class, 'edit']);
Route::delete('/grutas/{gruta}', [App\Http\Controllers\GrutasController::class, 'destroy']);
