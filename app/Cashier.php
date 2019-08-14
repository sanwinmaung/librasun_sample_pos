<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    protected $fillable = [
    	'name', 'fullname', 'mobile', 'gender',
    ];
}
