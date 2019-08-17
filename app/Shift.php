<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = [
    	'name',
    ];

    public function sell()
    {
    	return $this->hasMany(Sell::class);
    }
}
