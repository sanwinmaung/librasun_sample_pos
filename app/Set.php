<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $fillable = [
    	'first_product_id', 'second_product_id', 'name', 'price',
    ];

    public function getRouteKeyName()
	{
		return 'slug';
	}

	public function productone()
	{
		return $this->belongsTo(Product::class, 'first_product_id');
	}

	public function producttwo()
	{
		return $this->belongsTo(Product::class, 'second_product_id');
	}

	public function sellitem()
	{
		return $this->belongsTo(SellItem::class);
	}
}
