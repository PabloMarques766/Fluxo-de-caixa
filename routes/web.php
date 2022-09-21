<?php

use Illuminate\Support\Facades\Route;
#Controllers
use App\Http\Controllers\CentroCustoController;
use App\Http\Controllers\LancamentoController;
use App\Http\Controllers\TipoController;
use App\Models\CentroCusto;
use App\Models\Lancamento;

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
    return redirect()->route('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/
Route::prefix('dashboard')
    ->middleware(['auth'])
    ->group( function(){
        Route::get('/', function () { 
            return view('dashboard');
        })->name('dashboard');

});

/*
|--------------------------------------------------------------------------
| TIPOS
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/
Route::prefix('tipo')
->middleware(['auth'])
->controller(TipoController::class)
->group(function (){
    Route::get('/', 'index')->name('tipo.index');
    Route::get('/novo', 'create')->name('tipo.create');
    Route::get('/editar/{id}', 'edit')->name('tipo.edit');
    Route::get('/mostrar/{id}', 'show')->name('tipo.show');
    Route::get('/cadastrar', 'store')->name('tipo.store');
    Route::get('/atualizar/{id}', 'update')->name('tipo.update');
    Route::get('/deletar/{id}', 'destroy')->name('tipo.destroy');
});
/*
|--------------------------------------------------------------------------
| CENTRO DE CUSTO
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/
Route::prefix('centro-de-custo')
->middleware(['auth'])
->controller(CentroCusto::class)
->group(function (){
    Route::get('/', 'index')->name('centro.index');
    Route::get('/novo', 'create')->name('centro.create');
    Route::get('/editar/{id}', 'edit')->name('centro.edit');
    Route::get('/mostrar/{id}', 'show')->name('centro.show');
    Route::get('/cadastrar', 'update')->name('centro.update');
    Route::get('/atualizar/{id}', 'store')->name('centro.store');
    Route::get('/deletar/{id}', 'destroy')->name('centro.destroy');
});
/*
|--------------------------------------------------------------------------
| LANÇAMENTOS
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/
Route::prefix('lancamento')
->middleware(['auth'])
->controller(LancamentoController::class)
->group(function (){
    Route::get('/', 'index')->name('lancamtento.index');
    Route::get('/novo', 'create')->name('lancamtento.create');
    Route::get('/editar/{id}', 'edit')->name('lancamtento.edit');
    Route::get('/mostrar/{id}', 'show')->name('lancamtento.show');
    Route::get('/cadastrar', 'update')->name('lancamtento.update');
    Route::get('/atualizar/{id}', 'store')->name('lancamtento.store');
    Route::get('/deletar/{id}', 'destroy')->name('lancamtento.destroy');
});
/*
|--------------------------------------------------------------------------
| RELATORIOS
|--------------------------------------------------------------------------
| Thomas Melo - 19-09-2022
*/



require __DIR__.'/auth.php';
