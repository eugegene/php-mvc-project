<?php
class ProductsController extends Controller
{
    private $model;
    private $brandsModel;

    public function __construct()
    {
        parent::__construct();
        $this->model = new ProductsModel();
        $this->brandsModel = new BrandsModel();
    }

    public function action_render()
    {
        $products = $this->model->getAllWithBrands();
        $data = [
            'page' => 'Управління товарами',
            'products' => $products,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff'),
            'name' => Utils::getCookie('name', 'Гість'),
            'gender' => Utils::getCookie('gender', '')
        ];
        $this->view->render($data, 'products/products.php');
    }

    public function action_create()
    {
        $brands = $this->brandsModel->getAll();
        $data = [
            'page' => 'Додати товар',
            'brands' => $brands,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'products/create.php');
    }

    public function action_save_created_product()
    {
        $action = Utils::getVar('action');

        if ($action === "save_created_product") {
            $name = Utils::getVar('name');
            $brand_id = (int) Utils::getVar('brand_id');
            $price = (float) Utils::getVar('price');
            $this->model->create($name, $brand_id, $price);
            Application::generateHeader('products');
            exit;
        }
    }

    public function action_edit()
    {
        $id = (int) Utils::getVar('id');
        $result = $this->model->find($id);
        $product = $result->fetch_assoc();
        $brands = $this->brandsModel->getAll();

        if (!$product) {
            Application::generateHeader('products');
            exit;
        }

        $data = [
            'page' => 'Редагувати товар',
            'product' => $product,
            'brands' => $brands,
            'bgcolor' => Utils::getSession('bgcolor', '#ffffff')
        ];
        $this->view->render($data, 'products/edit.php');
    }

    public function action_save_edited()
    {
        $action = Utils::getVar('action');

        if ($action === "save_edited") {
            $id = (int) Utils::getVar('id');
            $name = Utils::getVar('name');
            $brand_id = (int) Utils::getVar('brand_id');
            $price = (float) Utils::getVar('price');
            $this->model->update($id, $name, $brand_id, $price);
            Application::generateHeader('products');
            exit;
        }
    }

    public function action_delete()
    {
        $id = (int) Utils::getVar('id');
        $this->model->delete($id);
        Application::generateHeader('products');
        exit;
    }
}
?>