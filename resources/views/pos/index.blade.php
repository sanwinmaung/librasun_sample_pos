@extends('layouts.master')
@section('style')
{{-- <style>
	input[type="text"],
	select.form-control {
		background: transparent;
		border: none;
		border-bottom: 1px solid #000000;
		-webkit-box-shadow: none;
		box-shadow: none;
		border-radius: 0;
	}

	input[type="text"]:focus,
	select.form-control:focus {
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.products-show {
		margin-top: 20px;
	}
</style> --}}
<style>
	/*table .cart-table {
		display:block;
		height:500px;
		overflow:auto;
		}*/
		/*.cart-table tbody {
			display: block;
			max-height: 500px;
			overflow-y: scroll;
		}

		.cart-table thead,
		.cart-table tbody tr {
			display: block;
			width: 100%;
			table-layout: fixed;
			}*/
		</style>
		<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
		@include('pos.product-style')
		@stop
		@section('content')
		@php
		$shiftId = session('shiftId');
		$cashierId = session('cashierId');
		@endphp

		<div class="row" id="app">
			<div class="col-md-12">
		{{-- <div class="row">
			<div class="col-sm-6 mb-4 mb-xl-0">
				<h3>Shift {{ App\Shift::find($shiftId)->name }}</h3>
			</div>
			<div class="col-sm-6">
				<div class="pull-right">
					<p style="text-align: right;">Cashier : {{ App\Cashier::find($cashierId)->fullname }}</p>
					<p style="text-align: right;color: green;">{{ Carbon\Carbon::now() }}</p>
				</div>
			</div>
		</div>
		<hr> --}}

		<div class="row">
			@include('pos.product-list')
			
			@include('pos.cart-list')			
		</div>
	</div>
</div>

@stop
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@include('pos.script')
@endpush