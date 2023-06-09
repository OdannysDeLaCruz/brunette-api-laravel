<?php
namespace App\Modules\Products\Services;

use App\Modules\Products\Repositories\ProductRepository;

class ProductService {
    protected $productRepository;
    
    public function __construct(ProductRepository $repository)
    {
        $this->productRepository = $repository;
    }

    public function getAll() {
        return $this->productRepository->getAll();
    }

    public function findById($productId) {
        return $this->productRepository->findById($productId);
    }
}