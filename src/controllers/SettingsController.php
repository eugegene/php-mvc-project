<?php
class SettingsController extends Controller
{
    private function _render_page(): void
    {
        $data = [
            'page' => 'Головна сторінка',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Гість'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'settings.php');
    }

    public function action_render()
    {
        $this->_render_page();
    }

    public function action_save_bgcolor()
    {
        $bgcolor = Utils::getVar("bgcolor");
        $_SESSION['bgcolor'] = $bgcolor;
        $this->_render_page();
    }

    public function action_save_user()
    {
        $name = Utils::getVar("name");
        $gender = Utils::getVar("gender");

        setcookie("name", $name, time() + 3600 * 24 * 30, "/");
        setcookie("gender", $gender, time() + 3600 * 24 * 30, "/");
        Application::generateHeader('settings');
        exit();
    }
}
?>