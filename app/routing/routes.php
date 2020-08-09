<?php

$router = new AltoRouter();

$router->map( 'GET', '/', 'App\Controllers\IndexController@show', 'home' );

//Admin ____________________________________
$router->map( 'GET', '/admin', 'App\Controllers\admin\DashBoadController@show', 'admin_dashboad');
$router->map( 'POST', '/admin', 'App\Controllers\admin\DashBoadController@create', 'admin_post');

    //Category
    $router->map( 'GET', '/admin/category', 'App\Controllers\admin\CategoryController@show', 'category');
    $router->map( 'GET', '/admin/category/create', 'App\Controllers\admin\CategoryController@create', 'category_create');
    $router->map( 'POST', '/admin/category/create', 'App\Controllers\admin\CategoryController@store', 'category_store');


//___________________________________________