<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    use HasFactory;

    function categories()
    {
        return $this->hasMany(Category::class);
    }
}
