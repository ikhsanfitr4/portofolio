<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes — NEONVERSE Portfolio
|--------------------------------------------------------------------------
*/

// Language switcher
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['id', 'en'])) {
        session(['locale' => $locale]);
        App::setLocale($locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Portfolio routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{slug}', [PortfolioController::class, 'projectDetail'])->name('projects.show');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');
