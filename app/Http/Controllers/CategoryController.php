<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * All main categories (parent category = 2) + children category (or children category tree, if use with(childrenCategories))
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::query()->where('parent_id', 2)->with('childrenCategory')->get();
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
        $category = Category::where('url_key', $urlKey)->with('childrenCategory')->get();
        $products = Product::where('categories', 'REGEXP', '([^0-9]|^)' . $category[0]->id . '([^0-9]|$)')->get(); //or paginate? or limit?

        return response(['category' => $category, 'products' => $products], 200);
    }
}
