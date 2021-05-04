<?php

namespace App\Models;

use App\Entities\BasketEntity;
use App\Entities\ProductEntity;
use App\Entities\UserEntity;
use CodeIgniter\Model;

class BasketModel extends Model
{
    protected $table = 'basket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'App\Entities\BasketEntity';
    protected $useSoftDelete = true;
    protected $protectFields = true;
    protected $allowedFields = ['userid', 'purchased'];

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;


    /** Checks whether a user has a basket.
     *
     * @param BasketEntity $basket
     * @return bool
     */
    public function exists(UserEntity $user): bool
    {
        $exists = $this
            ->select()
            ->where('userid', $user->id)
            ->where('purchased', false)
            ->countAllResults();
        return ($exists == 1);
    }

    public function ispurchased(BasketEntity $basket): bool
    {
        $exists = $this
            ->select()
            ->where('id', $basket->id)
            ->where('purchased', false)
            ->countAllResults();
        return ($exists == 0);
    }

    /** Creates a basket for the user if on does not exist
     *
     */
    public function inflate(UserEntity $user)
    {

        if (!$this->exists($user)) {

            $basket = new BasketEntity([
                'userid' => $user->id
            ]);

            try {
                $basketID = $this->insert($basket);
                return $this->find($basketID);

            } catch (\ReflectionException $exception) {
                log_message('error', '[ERROR] {exception}', ['exception' => $exception]);
            }
            log_message('error', 'failed to make basket');
        } else {
            return $this->finduserid($user);
        }

    }

    public function addProduct(UserEntity $user, ProductEntity $product, int $qty): bool
    {
        $basket = $this->inflate($user);
        $productBasketModel = new ProductBasketModel();
        return $productBasketModel->saveProduct($basket, $product, $qty);
    }

    //find a basket by a user's id
    public function finduserid(UserEntity $user)
    {
        $theuserid = $this
            ->select()
            ->where('userid', $user->id)
            ->where('purchased', false)
            ->first();
        return $theuserid;
    }



    public function checkout(BasketEntity $basket)
    {
        $purchased = $this
            ->select()
            ->where('id',$basket->id)
            ->where('purchased',false)
            ->first();

        try{

            return $this->update($purchased->id,['purchased'=>true]);

        }catch (\ReflectionException $exception){

            return ($exception);
        }

    }

    public function deleteBasket()
    {

    }


}
