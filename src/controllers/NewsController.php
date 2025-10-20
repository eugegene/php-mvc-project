<?php
class NewsController extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new NewsModel();
    }

    public function action_render()
    {
        $news = $this->model->getAll();
        $data = [
            'page' => 'Manage News',
            'news' => $news,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'news/news.php');
    }

    public function action_create()
    {
        $data = [
            'page' => 'Add news',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'news/create.php');
    }

    public function action_save_created_news()
    {
        $action = Utils::getVar('action');

        if ($action === "save_created_news") {
            $title = Utils::getVar('title');
            $content = Utils::getVar('content');
            $this->model->create($title, $content);
            Application::generateHeader('news');
            exit;
        }
    }

    public function action_edit()
    {
        $id = (int) Utils::getVar('id');
        $result = $this->model->find($id);
        $news = $result->fetch_assoc();

        if (!$news) {
            header('Location: index.php?page=news');
            exit;
        }

        $data = [
            'page' => 'Edit news',
            'news' => $news,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'news/edit.php');
    }

    public function action_save_edited()
    {
        $action = Utils::getVar('action');

        if ($action === "save_edited") {
            $id = (int) Utils::getVar('id');
            $title = Utils::getVar('title');
            $content = Utils::getVar('content');
            $this->model->update($id, $title, $content);
            Application::generateHeader('news');
            exit;
        }
    }

    public function action_delete()
    {
        $id = (int) Utils::getVar('id');
        $this->model->delete($id);
        Application::generateHeader('news');
        exit;
    }
}
?>