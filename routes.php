<?php
/**
 * Created by PhpStorm.
 * User: Chad
 * Date: 3/12/2016
 * Time: 12:30 AM
 */

$router->map('GET', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'Acme\Controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST', '/register', 'Acme\Controllers\RegisterController@postShowRegisterPage', 'register_post');

$router->map('GET', '/login', 'Acme\Controllers\RegisterController@getShowLoginPage', 'login');

$router->map('GET', '/about', 'Acme\Controllers\PageController@getShowLoginPage', 'generic_page');

