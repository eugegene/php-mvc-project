<?php
class UsersController extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new UserModel();
    }

    public function action_render()
    {
        $users = $this->model->getAll();
        $data = [
            'page' => 'Manage Users',
            'users' => $users,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'users/users.php');
    }

    public function action_create()
    {
        $data = [
            'page' => 'Add user',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'users/create.php');
    }

    public function action_save_created_user()
    {
        $action = Utils::getVar('action');

        if ($action === "save_created_user") {
            $username = Utils::getVar('username');
            $password = Utils::getVar('password');
            $this->model->create($username, $password);
            Application::generateHeader('users');
            exit;
        }
    }

    public function action_edit()
    {
        $id = (int) Utils::getVar('id');
        $result = $this->model->find($id);
        $user = $result->fetch_assoc();

        if (!$user) {
            header('Location: index.php?page=users');
            exit;
        }

        $data = [
            'page' => 'Edit user',
            'user' => $user,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'users/edit.php');
    }

    public function action_save_edited()
    {
        $action = Utils::getVar('action');

        if ($action === "save_edited") {
            $id = (int) Utils::getVar('id');
            $username = Utils::getVar('username');
            $password = Utils::getVar('password');
            $this->model->update($id, $username, $password);
            Application::generateHeader('users');
            exit;
        }
    }

    public function action_delete()
    {
        $id = (int) Utils::getVar('id');
        $this->model->delete($id);
        Application::generateHeader('users');
        exit;
    }
}
?>