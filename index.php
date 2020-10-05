<?php
require_once("framework/Routing/Route.php");
require_once('framework/Routing/Router.php');
require_once('framework/Routing/Request.php');
require_once('app/MVC/routes.php');

echo (new Router(new Request()))->getContent();
