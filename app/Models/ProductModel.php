<?php


namespace App\Models;


use App\Entities\ProductEntity;
use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'App\Entities\ProductEntity';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'price', 'description', 'category', 'brand','image'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = true;


    public function readByBrand(ProductEntity $product){

        if ($product->brand == 'all') {
            return $this->findAll();
        } else {
            return $this
                ->select()
                ->where('brand', $product->brand)
                ->findAll();
        }

    }

}