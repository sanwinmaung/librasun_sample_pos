<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use App\Cashier;
use App\Product;
use App\Set;
use App\SellTemp;
use Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function testing($slug)
    {
        // return $item = Product::where('slug', $slug)->first();
    }

    public function index()
    {
    	return view('home');
    }

    public function killSession()
    {
    	Session::flush();
    	return redirect('/');
    }

    public function shift($id)
    {
    	Session::put('shiftId', $id);
    	$cashiers = Cashier::all();
    	return view('cashier', compact('cashiers'));
    }

    public function cashier($id)
    {
    	Session::put('cashierId', $id);
        $shiftId = session('shiftId');
        SellTemp::where('shift_id', $shiftId)->delete();
        $products = Product::all();
    	$sets = Set::all();
    	return view('pos.index', compact('products', 'sets'));
    }
}
