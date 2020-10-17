<?php

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

Route::get('articles', 'ArticleController@index');

Route::get('hello', function () {
    return 'Hello';
});

Route::match(['get', 'post'], 'bye', function () {
    return view('bye');
});

Route::any('all', function () {
    return 'all';
});

Route::any('/with/many/parameters', function () {
    return 'Many params';
});

Route::get('article/{id}', function ($id) {
    return 'Article '.$id;
})->where('id', '[0-9]+')->name('article');

Route::get('article/{article}/user/{user}', function ($articleId, $userId) {
    return 'Article : ' . $articleId . ' User : ' . $userId;
})->where(['article' => '[A-Za-z]+', 'user' => '[0-9]+']);

Route::get('option/{param?}', function ($param = null) {
    return ' Param : ' . $param;
})->where('param', '[A-Za-z]+');

// ->where('param', '[A-Za-z]+');
// ->where('id', '[0-9]+');
// ->where(['article' => '[A-Za-z]+', 'user' => '[0-9]+']);
