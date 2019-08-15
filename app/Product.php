<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'code', 'slug', 'name', 'price', 'quantity', 'photo', 'status',
    ];
    
    public function getRouteKeyName()
	{
		return 'slug';
	}

	public function selltemp()
	{
		return $this->hasMany(SellTemp::class);
	}
	
}