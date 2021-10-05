<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * Get all categories with children category | category tree (with: childrenCategories)
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getAllCategories()
    {
        return Category::query()->where('parent_id', 2)->with('childrenCategory')->get();
    }

    /**
     * Get category by url_key
     * @param $urlKey
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public static function getCategoryByUrlKey($urlKey)
    {
        return Category::query()->where('url_key', $urlKey)->with('childrenCategory')->get();
    }
}
