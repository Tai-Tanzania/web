<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;

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

/*Route::get('/', function () {
    return view('partners.index');
}); */

Route::get('/', [PagesController::class, 'index']);

//for about
Route::get('/about', [PagesController::class, 'about']);
Route::get('/history', [PagesController::class, 'history']);
Route::get('/strategy', [PagesController::class, 'strategy']);
Route::get('/approach', [PagesController::class, 'approach']);
Route::get('/team', [PagesController::class, 'team']);
Route::get('/reports', [PagesController::class, 'reports']);

//what we do
Route::get('/duty', [PagesController::class, 'duty']);

//for how we do it
Route::get('/handling', [PagesController::class, 'handling']);
Route::get('/animations', [PagesController::class, 'animations']);
Route::get('/comics', [PagesController::class, 'comics']);
Route::get('/community', [PagesController::class, 'community']);

//for take action
Route::get('/actions', [PagesController::class, 'actions']);
Route::get('/sponsor', [PagesController::class, 'sponsor']);
Route::get('/donation', [PagesController::class, 'donation']);
Route::get('/story', [PagesController::class, 'story']);
Route::get('/careers', [PagesController::class, 'careers']);
Route::get('/partner', [PagesController::class, 'partner']);

Route::get('articles', [ArticleController::class, 'index']);
Route::get('article/{id}', [ArticleController::class, 'article']);