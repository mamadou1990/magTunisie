<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('article', [
    'as' => 'article', 'uses' => 'ArticleController@articles'
]);



Route::get('categorie', [
    'as' => 'categorie', 'uses' => 'CategorieController@categories'
]);


Route::get('sections', [
    'as' => 'sections', 'uses' => 'SectionController@sections'
]);

Route::get('media', [
    'as' => 'media', 'uses' => 'MediaController@medias'
]);

Route::post('article', [
    'as' => 'addArticle', 'uses' => 'MediaController@addArticles'
]);