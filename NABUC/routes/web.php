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

///////////////////////////////////////////////

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

///////////////////////////////////////////////

Route::get('/arqueologia/fornos', function () {
    return view('arqueologia.fornos');
});
Route::get('/arqueologia/saoLourenco', function () {
    return view('arqueologia.saoLourenco');
});
Route::get('/arqueologia/aqueduto', function () {
    return view('arqueologia.aqueduto');
});
Route::get('/arqueologia/esquecidos', function () {
    return view('arqueologia.esquecidos');
});
Route::get('/arqueologia/pataco', function () {
    return view('arqueologia.pataco');
});
Route::get('/arqueologia/monardo', function () {
    return view('arqueologia.monardo');
});

///////////////////////////////////////////////

Route::get('/bioespeleologia/insetos', function () {
    return view('bioespeleologia.insetos');
});
Route::get('/bioespeleologia/aracnideos', function () {
    return view('bioespeleologia.aracnideos');
});
Route::get('/bioespeleologia/anfibios', function () {
    return view('bioespeleologia.anfibios');
});
Route::get('/bioespeleologia/repteis', function () {
    return view('bioespeleologia.repteis');
});
Route::get('/bioespeleologia/quiropteros', function () {
    return view('bioespeleologia.quiropteros');
});

Auth::routes();

Route::get('/grutas', [App\Http\Controllers\GrutasController::class, 'index'])->name('grutas');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::post('/grutas', [App\Http\Controllers\GrutasController::class, 'store']);
Route::get('/grutas/create', [App\Http\Controllers\GrutasController::class, 'create'])->name('grutas.create');
Route::get('/grutas/{grutas}', [App\Http\Controllers\GrutasController::class, 'show']);
Route::put('/grutas/{grutas}', [App\Http\Controllers\GrutasController::class, 'update']);
Route::get('/grutas/edit/{grutas}', [App\Http\Controllers\GrutasController::class, 'edit']);
Route::delete('/grutas/{grutas}', [App\Http\Controllers\GrutasController::class, 'destroy']);
