<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->group(['prefix'=>'api'],function($router){
    $router->get('articles','ArticlesController@showAllArticles');
    $router->get('articles/{id}', ['uses' => 'articlesController@showOneArticle']);
    $router->get('articles/{id}/comments', ['uses' => 'articlesController@showArticleComments']);
    $router->get('articles/{id}/like', ['uses' => 'articlesController@showArticleLikes']);
    $router->get('articles/{id}/view', ['uses' => 'articlesController@showArticleViews']);
// });
