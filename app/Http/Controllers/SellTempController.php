<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\SellTemp;

class SellTempController extends Controller
{
	public function store()
	{
		$shiftId = session('shiftId');
		$item = Product::where('slug', request()->slug)->first();
		$sellTemp = SellTemp::where('shift_id', $shiftId)->where('product_id', $item->id)->first();

		if(!is_null($sellTemp)) {
			$sellTemp->product_qty += 1;
			$sellTemp->total_cost += $item->price;
			$sellTemp->save();
		} else {
			$tempItem = SellTemp::create([
				'shift_id'		=> $shiftId,
				'product_id'	=> $item->id,
				'product_qty'	=> 1,
				'total_cost'	=> $item->price,
			]);
		}
		$cartItems = SellTemp::with('product')->get();
		return response()->json($cartItems);
	}

	public function destroy()
	{
		$id = request()->id;
		SellTemp::find($id)->delete();
		$cartItems = SellTemp::with('product')->get();
		return response()->json($cartItems);
	}

	public function decreaseItem()
	{
		$id = request()->id;
		$item = SellTemp::find($id);
		if ($item->product_qty > 1) {
			$item->product_qty -= 1;
			$item->total_cost -= $item->product->price;
			$item->save();
		}elseif ($item->product_qty == 1) {
			$item->delete();
		}
		$cartItems = SellTemp::with('product')->get();
		return response()->json($cartItems);
	}

	public function increaseItem()
	{
		$id = request()->id;
		$item = SellTemp::find($id);
		$item->product_qty += 1;
		$item->total_cost += $item->product->price;
		$item->save();
		$cartItems = SellTemp::with('product')->get();
		return response()->json($cartItems);
	}

	// public function getItems()
	// {
	// 	$shiftId = session('shiftId');
	// 	$items = SellTemp::where('shift_id', $shiftId)->get();
	// 	return datatables()->eloquent($items)->make(true);
	// }

	public function productsDataAjax()
	{
		return SellTemp::with('product')->get();
	}
}
