<?php
session_start();

function myClassLoader($class_name)
{
    $class_file = "classes/" . $class_name . ".php";
    if (file_exists($class_file))
        require_once $class_file;

    $controller_file = "controllers/" . $class_name . ".php";
    if (file_exists($controller_file))
        require_once $controller_file;

    $db_file = "database/" . $class_name . ".php";
    if (file_exists($db_file))
        require_once $db_file;

}

spl_autoload_register('myClassLoader');
?>