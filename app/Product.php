<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //protected $table = 'product';

    protected $fillable = [
        'name',
        'description',
        'price'
    ];

    public function getPriceAttribute($value)
    {
        return number_format($value, 2, "," , ".");
    }
}
