<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use App\Cashier;
use Session;

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
		return view('pos.index');
	}
}
