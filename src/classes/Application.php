<?php
class Application
{
    private static $db;

    public function __construct()
    {
        self::$db = new MyDB();
    }

    public static function getdbInstance()
    {
        return self::$db;
    }

    public static function generateHeader($pageName, $actionName = "")
    {
        header('Location: index.php?page=' . $pageName .
            ($actionName ? '&action=' . $actionName : ''));
    }

    public function run()
    {
        $router = new Router();
        $controller = $router->getController();
        $controllerAction = $router->getAction();
        echo $controllerAction . '<br>';

        if (!method_exists($controller, $controllerAction)) {
            header("HTTP/1.0 404 Not Found");
            echo "<h2>Сторінка не знайдена</h2>";
            exit();
        }

        if (!is_callable([$controller, $controllerAction])) {
            header("HTTP/1.0 404 Not Found");
            echo "<h2>Сторінка не знайдена</h2>";
            exit();
        }

        $controller->$controllerAction();
    }
}
?>