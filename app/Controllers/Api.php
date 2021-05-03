<?php


namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class Api extends BaseController
{

    use ResponseTrait;

    public function pur()
    {

        if ($this->session->get('loggedIn')) {
            return redirect()->to('/');
        }


        return $this->respond((new ProductModel)->find(1));
    }



}