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




Route::get('/', ['middleware' => 'test', function() {
    return view('welcome');
}]);






Route::get('article', [
    'as' => 'article', 'uses' => 'ArticleController@articles'
]);


Route::get('article/{id}', [
    'as' => 'getArticleById', 'uses' => 'ArticleController@getArticleById'
]);

Route::post('article', [
    'as' => 'addArticle', 'uses' => 'ArticleController@addArticle'
]);




Route::get('categorie', [
    'as' => 'categorie', 'uses' => 'CategorieController@categories'
]);

Route::get('categorie/{id}', [
    'as' => 'categorie', 'uses' => 'CategorieController@categorie'
]);

Route::get('categories/{sectio_id}', [
    'as' => 'categorie', 'uses' => 'CategorieController@getCategoriesBySection'
]);

Route::post('categorie', [
    'as' => 'addcategorie', 'uses' => 'CategorieController@addCategorie'
]);
Route::delete('categorie', [
    'as' => 'deleteCategorie', 'uses' => 'SectionController@deleteCategories'
]);







Route::get('section', [
    'as' => 'sections', 'uses' => 'SectionController@sections'
]);

Route::get('section/{id}',[
    'as' => 'sections', 'uses' => 'SectionController@section'
]);

Route::post('section', [
    'as' => 'addSection', 'uses' => 'SectionController@addSection'
]);

Route::delete('section', [
    'as' => 'deleteSection', 'uses' => 'SectionController@deleteSections'
]);

Route::get('sections', [
    'as' => 'Sectionscat', 'uses' => 'SectionController@getSectionsWithCategories'
]);






Route::get('media', [
    'as' => 'media', 'uses' => 'MediaController@medias'
]);


Route::get('media/{id}', [
    'as' => 'getmediaById', 'uses' => 'MediaController@media'
]);

Route::post('media', [
    'as' => 'addMedia', 'uses' => 'MediaController@addMedia'
]);



Route::get('user', [
    'as' => 'user', 'uses' => 'UserController@users'
]);


Route::get('user/{id}', [
    'as' => 'getuserById', 'uses' => 'UserController@user'
]);

Route::post('user', [
    'as' => 'addUser', 'uses' => 'UserController@addUser'
]);





Route::get('article', [
    'as' => 'article', 'uses' => 'ArticleController@articles'
]);

Route::get('article/{id}', [
    'as' => 'article', 'uses' => 'ArticleController@article'
]);

Route::get('categories/{sectio_id}', [
    'as' => 'categorie', 'uses' => 'CategorieController@getCategoriesBySection'
]);

Route::post('article', [
    'as' => 'addarticle', 'uses' => 'articleController@addArticle'
]);
Route::delete('categorie', [
    'as' => 'deleteCategorie', 'uses' => 'SectionController@deleteCategories'
]);

Route::get('articles', [
    'as' => 'articleswithMedias', 'uses' => 'ArticleController@getArticlesWithMedias'
]);
