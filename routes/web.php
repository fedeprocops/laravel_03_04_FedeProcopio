<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/articoli', [ArticleController::class, 'prodotti'])->name('articles'); 

Route::get('/chisiamo', function () {
    return view('chisiamo');
})->name('about-us');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contacts');

Route::get('/servizi/{serviziName}',[PublicController:: class, 'serviziName'])->name('service.detail'); 

Route::get('/dettaglio/{productDetail}', [ArticleController::class, 'productDetail'])->name('product.detail'); 

Route::post('/contatti/submit', [PublicController::class, 'contattaci_submit'])->name('contattaci_submit'); 