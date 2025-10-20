<?php
class Utils
{
    public static function getVar($name, $def = "")
    {
        if (isset($_POST[$name])) {
            return $_POST[$name];
        } elseif (isset($_GET[$name])) {
            return $_GET[$name];
        } else {
            return $def;
        }
    }

    public static function getCookie($name, $def = "")
    {
        return $_COOKIE[$name] ?? $def;
    }

    public static function getSession($name, $def = "")
    {
        return $_SESSION[$name] ?? $def;
    }
}
?>