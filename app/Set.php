<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = [
    	'first_product_id', 'second_product_id', 'set_name', 'price',
    ];
}
