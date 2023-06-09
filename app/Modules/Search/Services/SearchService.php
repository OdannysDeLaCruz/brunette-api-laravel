<?php

namespace App\Modules\Search\Services;

use App\Models\Category;
use App\Models\Product;
use App\Modules\Products\Services\ProductService;
use App\Modules\Search\Interfaces\SearchServiceInterface;

class SearchService implements SearchServiceInterface {

    protected $productService;
    
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Find and return resource
     * @return Array
     */
    public function get($request) {
        // return $request->query();
        
        $productsQuery  = $request->query('products');
        $productIdQuery = $request->query('productId');
        $limitQuery     = $request->query('limit') ? (int)$request->query('limit') : 20;
        $paginateQuery  = $request->query('paginate') ? (int)$request->query('paginate') : 1;
        $categoryQuery  = $request->query('category');
        $categoryIdQuery  = $request->query('categoryId');
        $categoryNameQuery  = $request->query('categoryName');

        if ( $productsQuery ) {
            if ( $productIdQuery ) {
                return Product::find($productIdQuery);
            } 
            else if ( $categoryIdQuery ) {
                return Product::where('category_id', $categoryIdQuery)
                ->paginate($paginateQuery);
            }
            else {
                return Product::limit($limitQuery)
                    ->paginate($paginateQuery)
                    ->appends(request()->query());
            }
        } 
        else if ( $categoryQuery ) {
            if (  $categoryIdQuery ) {
                return Category::find($categoryIdQuery);
            } 
            else if ( $categoryNameQuery ) {
                return Category::where('name', $categoryNameQuery)->get();
            }
            else {
                return Category::limit($limitQuery)
                    ->paginate($paginateQuery)
                    ->appends(request()->query());
            }
        }
        else if( $request->query('q') ) {
            // TODO: buscar en nombre y descripcion de productos
            // TODO: buscar en nombre y descripcion de categorias

            return 'Results search of ' . $request->query('q');
        }
        
        return [];
    } 
}