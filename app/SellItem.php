<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellItem extends Model
{
    protected $fillable = [
    	'sell_id', 'product_id', 'set_id', 'product_qty', 'total_cost',
    ];

    public function sell()
    {
    	return $this->belongsTo(Sell::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function set()
    {
        return $this->belongsTo(Set::class);
    }
}
