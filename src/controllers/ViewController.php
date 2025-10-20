<?php
class ViewController extends Controller
{
    private function _render_page(): void
    {
        $data = [
            'page' => 'Home page',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'view.php');
    }

    public function action_render()
    {
        $this->_render_page();
    }
}
?>