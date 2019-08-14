<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use App\Cashier;
use App\Product;
use App\Set;
use Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }

    // public function shift()
    // {
    // 	$shifts = Shift::all();
    // 	return view('shift', compact('shifts'));
    // }
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

    	$products = Product::all();
    	$sets = Set::all();
    	return view('pos.index');
    }
}
