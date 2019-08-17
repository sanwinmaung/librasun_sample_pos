<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Set;
use App\SellTemp;

class SellTempController extends Controller
{
	public function store()
	{
		$shiftId = session('shiftId');
		$item = Product::where('slug', request()->slug)->first();

		if ($item->extra_id != null) {
			$price = $item->price + $item->extra->price;
		} else {
			$price = $item->price;
		}
		$sellTemp = SellTemp::where('shift_id', $shiftId)->where('product_id', $item->id)->first();

		if(!is_null($sellTemp)) {
			$sellTemp->product_qty += 1;
			$sellTemp->total_cost += $price;
			$sellTemp->save();
		} else {
			$tempItem = SellTemp::create([
				'shift_id'		=> $shiftId,
				'product_id'	=> $item->id,
				'product_qty'	=> 1,
				'total_cost'	=> $price,
			]);
		}
		$cartItems = SellTemp::with('product')->with('set')->get();
		return response()->json($cartItems);
	}

	public function destroy()
	{
		$id = request()->id;
		SellTemp::find($id)->delete();
		$cartItems = SellTemp::with('product')->with('set')->get();
		return response()->json($cartItems);
	}

	public function decreaseItem()
	{
		$id = request()->id;
		$item = SellTemp::find($id);
		if ($item->product != null) {
			$data = $item->product;
		}  elseif( $item->set != null) {
			$data = $item->set;
		}
		if ($item->product_qty > 1) {
			$item->product_qty -= 1;
			$item->total_cost -= $data->price;
			$item->save();
		}elseif ($item->product_qty == 1) {
			$item->delete();
		}
		$cartItems = SellTemp::with('product')->with('set')->get();
		return response()->json($cartItems);
	}

	public function increaseItem()
	{
		$id = request()->id;
		$item = SellTemp::find($id);
		if ($item->product != null) {
			$data = $item->product;
		}  elseif( $item->set != null) {
			$data = $item->set;
		}
		$item->product_qty += 1;
		$item->total_cost += $data->price;
		$item->save();
		$cartItems = SellTemp::with('product')->with('set')->get();
		return response()->json($cartItems);
	}

	public function costItemInfo()
	{
		static $data = [];
		$shiftId = session('shiftId');
		$items = SellTemp::where('shift_id', $shiftId)->get();
		$totalCost = $items->sum(function($item) {
			return $item->total_cost;
		});
		$totalItem = $items->sum(function($item) {
			return $item->product_qty;
		});
		$data['totalCost'] = sprintf("%.2f", $totalCost);
		$data['totalItem'] = $totalItem;
		return response()->json($data);
	}

	public function productsDataAjax()
	{
		return SellTemp::with('product')->get();
	}

	/*** Add Sets Menu ***/
	public function storeSet()
	{
		$shiftId = session('shiftId');
		$item = Set::where('slug', request()->slug)->first();
		$sellTemp = SellTemp::where('shift_id', $shiftId)->where('set_id', $item->id)->first();

		if(!is_null($sellTemp)) {
			$sellTemp->product_qty += 1;
			$sellTemp->total_cost += $item->price;
			$sellTemp->save();
		} else {
			$tempItem = SellTemp::create([
				'shift_id'		=> $shiftId,
				'set_id'		=> $item->id,
				'product_qty'	=> 1,
				'total_cost'	=> $item->price,
			]);
		}
		$cartItems = SellTemp::with('product')->with('set')->get();
		return response()->json($cartItems);
	}



}
