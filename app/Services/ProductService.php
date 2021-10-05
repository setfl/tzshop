<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    /**
     * Add related products array to Product
     * @param Product $product
     * @return Product
     */
    public function getRelatedProducts($product)
    {
        if(empty($product->related_products)) return $product;

        $relatedProducts = explode(",", $product->related_products);
        $product->related_products_array = Product::query()->whereIn('id', $relatedProducts)->get();
        return $product;
    }

}
