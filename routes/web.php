<?php

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

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'main-home'
    ]
);

$router->get(
  "/categories",
  [
      'uses' => 'CategoryController@list',
      'as'   => 'category-list'
  ]
);

$router->post(
  "/categories",
  [
      'uses' => 'CategoryController@add',
      'as'   => 'category-add'
  ]
);

$router->delete(
  "/categories/{id}",
  [
      'uses' => 'CategoryController@delete',
      'as'   => 'category-delete'
  ]
);

$router->get(
    "/tasks",
    [
        'uses' => 'TaskController@list',
        'as'   => 'task-list'
    ]
  );

  $router->post(
    "/tasks",
    [
        'uses' => 'TaskController@add',
        'as'   => 'task-add'
    ]
  );
