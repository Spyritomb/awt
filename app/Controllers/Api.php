<?php


namespace App\Controllers;

use App\Entities\BasketEntity;
use App\Entities\ProductBasketEntity;
use App\Models\BasketModel;
use App\Models\ProductBasketModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Api extends BaseController
{

    use ResponseTrait;

    public function order(int $id)
    {

        if (!$this->session->get('loggedIn')) {
            return $this->failUnauthorized('Nowt \'ere mate');
        }

        $userModel = new UserModel();
        $user = $userModel->find($this->session->get('userID'));
        if (!$userModel->checkadmin($user)) return $this->failUnauthorized('Nowt \'ere mate');

        $productBasket = new ProductBasketModel();


        $basketModel = new BasketModel();

        $purchased = $basketModel->ispurchased(new BasketEntity(['id' => $id]));

        if (!$purchased) {
            return $this->failNotFound('This basket isn\'t purchased yet');
        }

        $basket = $productBasket->orderitems(new ProductBasketEntity(['basketid' => $id]));

        return $this->respond($basket);
    }


}