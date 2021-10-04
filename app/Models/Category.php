<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Find category by name
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'url_key';
    }

    /**
     * Get parent category
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function parentCategory()
    {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    /**
     * Get one children category
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrenCategory()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    /**
     * Get children category three
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function childrenCategories()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('childrenCategory');
    }
}
