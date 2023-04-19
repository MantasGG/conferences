<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ConferenceController;

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

//Route::get('/', static function () {
//    return view('conference.show', []);
//})->name('conference.show');
Route::resource('/', ConferenceController::class)->only(['index']);
Route::resource('/conference', ConferenceController::class)->only(['show']);
//Route::get('/conference/{id}', [ConferenceController::class, 'show'])->name('conference.show');


Route::get('/articles/{id}', function ($articleId) {
    $articles = [
        1 => [
            'title' => 'First article',
            'content' => 'First article text 123123'
        ],
        2 => [
            'title' => 'Second article',
            'content' => 'Second article text 123123'
        ]
    ];

    abort_if(!isset($articles[$articleId]), 404);

    return view('articles.show', ['article' => $articles[$articleId]]);
})->name('articles.show');
