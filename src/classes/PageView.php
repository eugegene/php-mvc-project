<?php
class PageView extends View
{
    public function render($data = [], $template = "")
    {
        extract($data);
        require_once 'views/layout/header.php';
        require_once 'pages/' . $template;
        require_once 'views/layout/footer.php';
    }
}
?>