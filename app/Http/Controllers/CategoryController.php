<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json(['categories' => $categories], 200);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->image_background = $request->image_background;
        $category->status = true;
        $category->image = $request->image;
        $category->parent_category_id = $request->parent_category_id;

        if ( $category->save() ) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        $category = Category::find(intval($categoryId));
        if ( $category ) {
            return response()->success($category);
        }

        return response()->notFound();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        dd($request, $category);
        $category = Category::findOrFail();
        $category->name = $category->name;
        $category->image_background = $category->image_background;
        $category->status = true;
        $category->image = $category->image;
        $category->parent_category_id = $category->parent_category_id;

        $category->save();
        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        return $category;
    }

    public function getProducts($categoryId) {
        $products = Product::where('category_id', intval($categoryId))->get();
        
        if ( count($products->toArray()) ) {
            return response()->json(['products' => $products], 200);
        } else {
            return response()->notFound();
        }
    }
}
