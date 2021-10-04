<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    public $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * All products with pagination
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query()->paginate(10);
        return response(['products' => $products, 200]);
    }

    /**
     * One product
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = $this->productService->getRelatedProducts($product);
        return response(['product' => $product, 200]);
    }
}
