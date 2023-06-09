<?php
namespace App\Modules\Products\Repositories;

use App\Models\Product;
use App\Modules\Products\Interfaces\RepositoryInterface;


class ProductRepository implements RepositoryInterface {
    public function getAll() {
        return Product::all();
    }

    public function findById($productId) {
        return Product::find($productId);
    }
}