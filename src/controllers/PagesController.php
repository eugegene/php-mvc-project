<?php
class PagesController extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new PagesModel();
    }

    public function action_render()
    {
        $pages = $this->model->getAll();
        $data = [
            'page' => 'Manage Pages',
            'pages' => $pages,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'pages/pages.php');
    }

    public function action_create()
    {
        $data = [
            'page' => 'Add page',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'pages/create.php');
    }

    public function action_save_created_page()
    {
        $action = Utils::getVar('action');

        if ($action === "save_created_page") {
            $title = Utils::getVar('title');
            $keywords = Utils::getVar('keywords');
            $description = Utils::getVar('description');
            $h1 = Utils::getVar('h1');
            $content = Utils::getVar('content');
            $this->model->create($title, $keywords, $description, $h1, $content);
            Application::generateHeader('pages');
            exit;
        }
    }

    public function action_edit()
    {
        $id = (int) Utils::getVar('id');
        $result = $this->model->find($id);
        $page = $result->fetch_assoc();

        if (!$page) {
            Application::generateHeader('pages');
            exit;
        }

        $data = [
            'page' => 'Edit page',
            'page_data' => $page,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'pages/edit.php');
    }

    public function action_save_edited()
    {
        $action = Utils::getVar('action');

        if ($action === "save_edited") {
            $id = (int) Utils::getVar('id');
            $title = Utils::getVar('title');
            $keywords = Utils::getVar('keywords');
            $description = Utils::getVar('description');
            $h1 = Utils::getVar('h1');
            $content = Utils::getVar('content');
            $this->model->update($id, $title, $keywords, $description, $h1, $content);
            Application::generateHeader('pages');
            exit;
        }
    }

    public function action_delete()
    {
        $id = (int) Utils::getVar('id');
        $this->model->delete($id);
        Application::generateHeader('pages');
        exit;
    }
}
?>