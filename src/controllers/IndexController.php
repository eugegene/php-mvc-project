<?php
class IndexController extends Controller
{
    private function _render_page(): void
    {
        $data = [
            'page' => 'Головна сторінка',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Гість'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'index.php');
    }

    public function action_render()
    {
        $this->_render_page();
    }
}
?>