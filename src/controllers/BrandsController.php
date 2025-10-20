<?php
class BrandsController extends Controller
{
    private $model;

    public function __construct()
    {
        parent::__construct();
        $this->model = new BrandsModel();
    }

    public function action_render()
    {
        $brands = $this->model->getAll();
        $data = [
            'page' => 'Manage Brands',
            'brands' => $brands,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Guest'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'brands/brands.php');
    }

    public function action_create()
    {
        $data = [
            'page' => 'Add brand',
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'brands/create.php');
    }

    public function action_save_created_brand()
    {
        $action = Utils::getVar('action');

        if ($action === "save_created_brand") {
            $name = Utils::getVar('name');
            $this->model->create($name);
            Application::generateHeader('brands');
            exit;
        }
    }

    public function action_edit()
    {
        $id = (int) Utils::getVar('id');
        $result = $this->model->find($id);
        $brand = $result->fetch_assoc();

        if (!$brand) {
            Application::generateHeader('brands');
            exit;
        }

        $data = [
            'page' => 'Edit brand',
            'brand' => $brand,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'brands/edit.php');
    }

    public function action_save_edited()
    {
        $action = Utils::getVar('action');

        if ($action === "save_edited") {
            $id = (int) Utils::getVar('id');
            $name = Utils::getVar('name');
            $this->model->update($id, $name);
            Application::generateHeader('brands');
            exit;
        }
    }

    public function action_delete()
    {
        $id = (int) Utils::getVar('id');
        $this->model->delete($id);
        Application::generateHeader('brands');
        exit;
    }
}
?>