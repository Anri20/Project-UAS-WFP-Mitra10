<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'idcategories';

    // Default Relation
    public function products()
    {
        return $this->hasMany(Product::class, "category_id", "idcategories");
    }

    public function child_categories()
    {
        return $this->hasMany(Category::class, "parent_category_id", "idcategories");
    }

    public function parent_category()
    {
        return $this->belongsTo(Category::class, "parent_category_id", "idcategories");
    }
}
