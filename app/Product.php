<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'code', 'slug', 'name', 'price', 'quantity', 'extra_id', 'status',
    ];
    
    public function getRouteKeyName()
	{
		return 'slug';
	}

	public function selltemp()
	{
		return $this->hasMany(SellTemp::class);
	}

	public function set()
	{
		return $this->hasMany(Set::class);
	}

	public function extra()
	{
		return $this->belongsTo(ProductExtra::class, 'extra_id');
	}
	
}