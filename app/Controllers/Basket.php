<?php


namespace App\Controllers;


use App\Entities\BasketEntity;
use App\Entities\ProductEntity;
use App\Entities\UserEntity;
use App\Models\BasketModel;
use App\Models\ProductBasketModel;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class Basket extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $productModel = new ProductModel();
        $basketModel = new BasketModel();
        $productbasketModel = new ProductBasketModel();


        $basket = $basketModel->finduserid(new UserEntity(['id'=>$this->session->get('userID')]));

        $data = [
            "title" => "Products",
            'products' => $basket
        ];

        $hdata = [
            "title" => 'Basket'
        ];


        if (!$this->session->get('loggedIn')) {
            return redirect()->to('/');
        }

        echo view('templates/header', $hdata);
        echo view('basket/basket', $data);
        echo view('templates/footer');
    }


    public function addBasket(int $productID, int $qty)
    {

        if (!$this->session->get('loggedIn')) {
            return redirect()->to('/admin/login');
        }

        if ($qty < 1) {
            return $this->failValidationError('Please input a valid number, greater than zero.');
        }

        $productModel = new ProductModel();
        $product = $productModel->find($productID);

        return $this->respond((new BasketModel())->addProduct((new UserEntity(['id' => $this->session->get('userID')])), $product, $qty));


    }


//        $products = $this->request->getMethod() == 'post';
////         $this->request->getPost();
////        $qty = $this->request->getPost('1');
//
//        var_dump([$products]);
////        $basketModel = new BasketModel();
////
////        $insertbasket = $basketModel->exists();


}


//TODO: put toast when adding to cart https://getbootstrap.com/docs/5.0/components/toasts/
//TODO: show modal when clearing cart https://getbootstrap.com/docs/5.0/components/modal/