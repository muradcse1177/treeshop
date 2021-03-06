<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
