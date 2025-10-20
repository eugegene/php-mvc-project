<?php
class Router
{
    public function getController()
    {
        $page = Utils::getVar('page', 'index');

        if ($page !== 'auth' && !AuthController::checkAuth()) {
            header('Location: index.php?page=auth');
            exit;
        }

        $controllerName = ucfirst($page) . 'Controller';
        $controllerFile = "controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            if (class_exists($controllerName)) {
                return new $controllerName();
            }
        }

        header("HTTP/1.0 404 Not Found");
        echo "<h2>Сторінка не знайдена</h2>";
        exit();
    }

    public function getAction()
    {
        $action = Utils::getVar('action', 'render');
        return "action_" . $action;
    }
}
?>