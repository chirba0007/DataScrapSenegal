<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RechercheEntrepriseController;

use App\Http\Controllers\DataCollectionController;
use App\Http\Controllers\VisualizationController;

Route::get('/collect-data', [DataCollectionController::class, 'index'])->name('collect-data');
Route::post('/scrape', [DataCollectionController::class, 'scrape'])->name('scrape');
Route::get('/visualization', [VisualizationController::class, 'show'])->name('visualization');

Route::get('/recherche-entreprises', [RechercheEntrepriseController::class, 'index']);
Route::get('/recherche-entreprises/recherche', [RechercheEntrepriseController::class, 'search'])->name('rechercheEntreprises.search');

Route::get('/dashboard', [AdminController::class, 'tableauDeBord'])
    ->middleware(['auth'])
    ->name('dashboard');




Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
