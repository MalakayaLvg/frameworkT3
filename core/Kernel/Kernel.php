<?php
namespace Core\Kernel;

use App\Controller\HomeController;
use Core\Debugging\Debugger;
class Kernel
{
    public static function run()
    {
//        echo "Debugger::run()";
//        echo "<br>";
        Debugger::run();

        $type = "home";
        $action = "index";

        if(!empty($_GET['type']))
        {
            $type = $_GET['type'];
        }
        if(!empty($_GET['action']))
        {
            $action = $_GET['action'];
        }

        $type = ucfirst($type);
        $controllerName = "App\Controller\\".$type."Controller";

        $controller = new $controllerName();
        $controller->$action();



    }
}