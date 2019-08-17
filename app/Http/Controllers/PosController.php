<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use App\Cashier;
use App\Product;
use App\Set;
use App\SellTemp;
use Session;
use DataTables;

class PosController extends Controller
{
	public function index()
	{
		$shiftId = session('shiftId');
		$cashierId = session('cashierId');

		if (is_null($shiftId) && is_null($cashierId)) {
			$shifts = Shift::all();
			return view('shift', compact('shifts'));
		}
		SellTemp::where('shift_id', $shiftId)->delete();
		$products = Product::all();
		$sets = Set::all();
		return view('pos.index', compact('products', 'sets'));
	}
}
