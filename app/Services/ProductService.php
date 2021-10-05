<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    /**
     * Get all products with paginate
     * @param int $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public static function getAllProducts($perPage = 10)
    {
        return Product::query()->paginate($perPage);
    }

    /**
     * Get products by category ID
     * @param $categoryId
     * @return mixed
     */
    public static function getProductsByCategoryId($categoryId)
    {
        return Product::query()->where('categories', 'REGEXP', '([^0-9]|^)' . $categoryId . '([^0-9]|$)')->get(); //or paginate? or limit?
    }

    /**
     * Add related products array to Product
     * @param Product $product
     * @return Product
     */
    public static function getRelatedProducts($product)
    {
        if(empty($product->related_products)) return $product;

        $relatedProducts = explode(",", $product->related_products);
        $product->related_products_array = Product::query()->whereIn('id', $relatedProducts)->get();
        return $product;
    }
}
