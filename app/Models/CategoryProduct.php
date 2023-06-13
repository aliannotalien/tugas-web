<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    public function category() {
        return hasMany(Category::class);
    }

    public function product() {
        return hasMany(Product::class);
    }
}
