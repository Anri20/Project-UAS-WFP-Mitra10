<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'idcategories';

    public function product()
    {
        return $this->hasMany(Product::class, "category_id", "idcategories");
    }

    public function child_category()
    {
        return $this->hasMany(Category::class, "parent_category_id", "idcategories");
    }

    public function parent_category()
    {
        return $this->belongsTo(Category::class, "parent_category_id", "idcategories");
    }
}
