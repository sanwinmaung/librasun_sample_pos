<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellTemp extends Model
{
    protected $fillable = [
    	'shift_id', 'product_id', 'product_qty', 'total_cost',
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

}
