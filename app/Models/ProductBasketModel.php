<?php

namespace App\Models;

use App\Entities\BasketEntity;
use App\Entities\ProductBasketEntity;
use App\Entities\ProductEntity;
use CodeIgniter\Model;

class ProductBasketModel extends Model
{
    protected $table = 'productbasket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'App\Entities\ProductBasketEntity';
    protected $useSoftDelete = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'productid',
        'basketid',
        'price',
        'quantity'
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    public function saveProduct(BasketEntity $basket, ProductEntity $product, int $qty): bool
    {
        $productBasket = new ProductBasketEntity([
            'productid' => intval($product->id),
            'basketid' => intval($basket->id),
            'price' => $product->price,
            'quantity' => $qty
        ]);

        if ($this->exists($productBasket)) {
            try {
                $productBasketDB = $this->findProductBasket($productBasket);

                $productBasketDB->quantity += $qty;

                return $this->update($productBasketDB->id, $productBasketDB);
            } catch (\ReflectionException $exception) {
            }
        } else {
            return $this->save($productBasket);
        }
        return false;

    }

    public function findProductBasket(ProductBasketEntity $productBasket)
    {
        return $this
            ->where('productid', $productBasket->productid)
            ->where('basketid', $productBasket->basketid)
            ->first();
    }

    public function exists(ProductBasketEntity $productBasket): bool
    {
        return (!empty($this->findProductBasket($productBasket)));
    }

}
