<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    protected $fillable = [
    	'shift_id', 'cashier_id', 'total_cost', 'discount_amount', 'net_amount',
    ];

    public function shift()
    {
    	return $this->belongsTo(Shift::class);
    }

    public function cashier()
    {
    	return $this->belongsTo(Cashier::class);
    }

    public function sellitems()
    {
        return $this->hasMany(SellItem::class);
    }
}
