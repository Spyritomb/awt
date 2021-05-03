<?php


namespace App\Controllers;


use App\Models\ProductModel;
use App\Entities\ProductEntity;
use CodeIgniter\API\ResponseTrait;

class Product extends BaseController
{

    use ResponseTrait;

    /**
     * Shows all products within the database
     */
    public function index()
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();


        $data = [
            'products' => $products
        ];

        $data2 = [
            'title' => "Products"
        ];

        echo view('templates/header', $data2);
        echo view('/index', $data);
        echo view('templates/footer');

    }

    public function brand($brand = 'all')
    {
        $productModel = new ProductModel();
        $products = $productModel->readByBrand(new ProductEntity(['brand' => $brand]));

        $data = [
            'products' => $products
        ];

        $data2 = [
            'title' => "Products"
        ];

        echo view('templates/header', $data2);
        echo view('/index', $data);
        echo view('templates/footer');


    }

    public function sort($brand = 'all')
    {
        $productModel = new ProductModel();
        $products = $productModel->readByBrand(new ProductEntity(['brand' => $brand]));

        if (empty($products)) {
            //$products['status'] = 404;
            return $this->respond($products, 404);
        }
        //$products['status'] = 200;
        return $this->respond($products, 200);
    }

//    public function sortCategory($category = 'all')
//    {
//        $productModel = new ProductModel();
//        $products = $productModel->readByBrand(new ProductEntity(['category' => $category]));
//
//        if (empty($products)) {
//            //$products['status'] = 404;
//            return $this->respond($products, 404);
//        }
//        //$products['status'] = 200;
//        return $this->respond($products, 200);
//    }

}

//TODO: put toast when adding to cart https://getbootstrap.com/docs/5.0/components/toasts/
//TODO: show modal when clearing cart https://getbootstrap.com/docs/5.0/components/modal/