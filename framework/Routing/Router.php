<?php
require_once('Route.php');
require_once('Request.php');

class Router 
{
    public static $routes = [];

    private $request;

    /**
     * Router constructer
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getContent()
    {
        $exec_route = null;
        foreach (self::$routes as $route){
            if($route->getPath() == $this->request->getPath() && $route->getType() == $this->request->getType()){
                $exec_route = $route;
            }
        }
        if($exec_route)
        {
            $action = explode("@", $exec_route->getAction());
            if (isset($action[0]) && isset($action[1]))
            {
                $controller_name = $action[0];
                try {
                    require_once("{$_SERVER['DOCUMENT_ROOT']}/app/MVC/Controllers/{$controller_name}.php");
                } catch (Exception $e) {
                    return "Controller {$controller_name} is not found";
                }
                $method_name = $action[1];
                $controller = new $controller_name();
                if (method_exists($controller, $method_name)) return $controller->$method_name();
                else return "Method {$method_name} does not exist";
            }
            else return "Action is not correct".$exec_route->getAction();
        }
        return "404";
    }

    public static function addRoute($route)
    {
        array_push(self::$routes, $route);
    }
}