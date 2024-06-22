<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ImageController;
use App\http\Controllers\ArticleController;
use App\Models\Article;
use App\Models\Image;

Route::get('/', function () {
    $articles = Article::latest()->paginate(9);
    return view('index', compact('articles'))
    ->with('i', (request()->input('page', 1) - 1) * 9);
})->name('home');;
Route::get('/event', function () {
    $articles = Article::latest()->paginate(9);
    return view('news', compact('articles'))
    ->with('i', (request()->input('page', 1) - 1) * 9);
})->name('event');;
Route::get('/sponsor', function () {return view('sponsor');})->name('sponsor');;
Route::get('/view', function () {return view('show');});
Route::get('/view-articles/{id}', [ArticleController::class, 'viewArticle'])->name('articles.view');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('articles', ArticleController::class);
    Route::get('/articles/{id}/editimage', [ArticleController::class, 'editimage'])->name('articles.editimage');
    Route::post('/articles/{id}/addimage', [ArticleController::class, 'addImage'])->name('articles.addimage');
    Route::delete('/image/{id}', [ImageController::class, 'delete'])->name('image.delete');
});

require __DIR__.'/auth.php';
