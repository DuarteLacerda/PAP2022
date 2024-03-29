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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth')->name('profile');
Route::get('/catalogo', [App\Http\Controllers\CatalogoController::class, 'index'])->name('catalogo');
Route::get('/eventosCatalogo', [App\Http\Controllers\EventosCatalogoController::class, 'index'])->name('eventosCatalogo');
Route::get('/grutas', [App\Http\Controllers\GrutaController::class, 'index'])->middleware('auth')->name('grutas');
Route::post('/grutas', [App\Http\Controllers\GrutaController::class, 'store']);
Route::get('/grutas/create', [App\Http\Controllers\GrutaController::class, 'create'])->middleware('auth')->name('grutas.create');
Route::get('/grutas/{gruta}', [App\Http\Controllers\GrutaController::class, 'show']);
Route::put('/grutas/{gruta}', [App\Http\Controllers\GrutaController::class, 'update']);
Route::get('/grutas/edit/{gruta}', [App\Http\Controllers\GrutaController::class, 'edit'])->middleware('auth');
Route::delete('/grutas/{gruta}', [App\Http\Controllers\GrutaController::class, 'destroy']);
Route::delete('/fotos/{foto}/{name}', [App\Http\Controllers\FotoController::class, 'destroy']);

///////////////////////////////////////////////

Route::get('/eventosCatalogo', [App\Http\Controllers\EventosCatalogoController::class, 'index'])->name('eventoCatalogo');
Route::get('/evento', [App\Http\Controllers\EventosController::class, 'index'])->middleware('auth')->name('evento');
Route::post('/evento', [App\Http\Controllers\EventosController::class, 'store']);
Route::get('/evento/create', [App\Http\Controllers\EventosController::class, 'create'])->middleware('auth')->name('evento.create');
Route::get('/evento/{eventos}', [App\Http\Controllers\EventosController::class, 'show']);
Route::put('/evento/{eventos}', [App\Http\Controllers\EventosController::class, 'update']);
Route::get('/evento/edit/{eventos}', [App\Http\Controllers\EventosController::class, 'edit'])->middleware('auth');
Route::delete('/evento/{eventos}', [App\Http\Controllers\EventosController::class, 'destroy']);
Route::delete('/fotosEventos/{fotoEventos}/{name}', [App\Http\Controllers\FotosEventosController::class, 'destroy']);
