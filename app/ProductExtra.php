<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductExtra extends Model
{
    protected $fillable = [
    	'code', 'slug', 'name', 'price', 'quantity',
    ];
    
    public function getRouteKeyName()
	{
		return 'slug';
	}

	public function product()
	{
		return $this->hasMany(Product::class);
	}
}
