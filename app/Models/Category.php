<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class, "category", "idcategories");
    }

    public function category()
    {
        return $this->hasMany(Category::class, "parent_category", "idcategories");
    }
}
