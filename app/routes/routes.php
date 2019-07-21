<?php

$router = new AltoRouter();

$router->map('GET', '/', 'App\Http\Controllers\IndexController@show','home');