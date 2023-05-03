<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'prix',
        'bio',
        'stock',
        'image',
    ];

    public function getImageAttribute($value){
        return $value??'product/product.jpg';
}
}
