<?php
abstract class View
{
    abstract public function render($data = [], $template = "");
}
?>