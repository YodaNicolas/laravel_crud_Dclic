<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\AdminController;
use App\Models\utili;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {

    $users = utili::all();
    return view('dashboard', compact('users'));
})->middleware(['auth'])->name('dashboard');

Route::get('ajoute', function () {
    return view('admin/formajout');
})->name('ajoute');

require __DIR__.'/auth.php';

// Route::get('ajouter', [ActionController::class, 'ajouter']);
// Route::post('ajouter', [ActionController::class,'ajouter'])->name('ajouter');


Route::get('inscrire', [AdminController::class, 'register']);


Route::post('inscrire', [AdminController::class, 'enregistrer'])->name('inscrire');

Route::get('delete/{utili}', [AdminController::class, 'delete'])->name('utili.delete');

Route::get('edit/{utili}', [AdminController::class, 'edit']);

Route::put('insertdonne/{utili}', [AdminController::class, 'modifier']);    