<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function productsData()
	{
		$products = Product::latest();
		return datatables()->eloquent($products)
		->addColumn('add', function ($product) {
			return '<a class="btn btn-success" id="add-product" style="color: #ffffff;">Add</a>';
		})
		->rawColumns(['add'])
		->make(true);
	}

}
