<?php

/* require_once("../../framework/Routing/Route.php");
require_once("../../framework/Routing/Router.php"); */

Router::addRoute(new Route('hello', 'getHello', Route::METHOD_GET));