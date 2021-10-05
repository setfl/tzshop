<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\ProductService;

class CategoryController extends Controller
{
    /**
     * All main categories (parent category = 2) + children category (or children category tree, if use with(childrenCategories))
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryService::getAllCategories();
        return response(['categories' => $categories], 200);
    }


    /**
     * One category + children category, products of this category
     *
     * @param  $urlKey
     * @return \Illuminate\Http\Response
     */
    public function show($urlKey)
    {
        $category = CategoryService::getCategoryByUrlKey($urlKey);
        $products = ProductService::getProductsByCategoryId($category[0]->id);

        return response(['category' => $category, 'products' => $products], 200);
    }
}
