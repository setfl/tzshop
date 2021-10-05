<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    /**
     * All products with pagination
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = ProductService::getAllProducts();
        return response(['products' => $products, 200]);
    }

    /**
     * One product
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = ProductService::getRelatedProducts($product);
        return response(['product' => $product, 200]);
    }
}
