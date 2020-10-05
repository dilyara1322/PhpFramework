<?php

/* require_once("../../framework/Routing/Route.php");
require_once("../../framework/Routing/Router.php"); */

Router::addRoute(new Route('hello', 'HelloController@index', Route::METHOD_GET));
Router::addRoute(new Route('data', 'HelloController@data', Route::METHOD_GET));