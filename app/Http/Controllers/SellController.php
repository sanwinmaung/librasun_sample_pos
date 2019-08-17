<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sell;
use App\Product;
use App\SellItem;
use App\SellTemp;
use PDF;

class SellController extends Controller
{
	public function proceedVocher(Request $request)
	{
		$discountAmout = $request->discount;
		if($discountAmout == 0.00) {
			$discountAmout = null;
		}

		$cartItems = SellTemp::where('shift_id', session('shiftId'))->get();
		$totalCost = $cartItems->sum(function($cartItem) {
			return $cartItem->total_cost;
		});

		$sell = Sell::create([
			'shift_id'			=> session('shiftId'),
			'cashier_id'		=> session('cashierId'),
			'total_cost'		=> $totalCost,
			'discount_amount'	=> $discountAmout,
			'net_amount'		=> $totalCost - $discountAmout,
		]);

		foreach ($cartItems as $item) {
			SellItem::create([
				'sell_id'			=> $sell->id,
				'product_id'		=> $item->product_id,
				'set_id'			=> $item->set_id,
				'product_qty'		=> $item->product_qty,
				'total_cost'		=> $item->total_cost,
			]);
		}

		$cartItems = SellTemp::where('shift_id', session('shiftId'))->delete();
		$data = $sell;
		return view('invoices.proceed-vocher', compact('data'));
	}

	// protected static function createPdf($id)
	// {
	// 	$data = Sell::find($id);
	// 	$result = [ 'data' => $data ];
	// 	$pdf = PDF::loadView('invoices.invoice', $result);
	// 	$paperSize = array(0,0,280,600);
	// 	$pdf->setPaper($paperSize);
	// 	return $pdf->download('invoice.pdf');
	// }

	public function downloadVocher($id)
	{
		$data = Sell::find($id);
		$result = [ 'data' => $data ];
		$pdf = PDF::loadView('invoices.vocher', $result);
		$paperSize = array(0,0,280,700);
		$pdf->setPaper($paperSize);
		return $pdf->download('vocher-'.$data->id.'.pdf');
	}

	public function searchVocher(Request $request)
	{
		$id = $request->vocher_id;
		$data = Sell::find($id);
		return view('invoices.proceed-vocher', compact('data'));
	}
}
