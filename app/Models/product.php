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
        'old_prix',
        'bio',
        'stock',
        'image',
        'type',
    ];

    public function getImageAttribute($value){
        return $value??'product/product.jpg';
}
}
