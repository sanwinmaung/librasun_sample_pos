<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Librasun POS</title>

	<style>
		@page{ 
			margin: 0px; 
		}
		body{ 
			margin: 0px;
		}
		.over-select{
			color: #737373;
		}
		.center{
			text-align: center;
			font-size: 16px;
		}
		.center h5{
			margin: 3px 0 0 0;
		}
		@font-face {
			font-family: 'Open Sans';
			font-weight: 50;
			src: url('{{ public_path('fonts/OpenSans/OpenSans-Light.tff') }}');
		}
		.text-label-right h5{
			text-align: right;
			margin-right: 60px;
		}
		.text-amount-right h5{
			text-align: right;
			margin-right: 10px;
		}
		.total-label-right h5{
			text-align: right;
		}
		.total-amount-right h5{
			text-align: right;
			margin-right: 11px;
		}
		.shift-info h5{
			margin-top: 0px;
			margin-bottom: 0px;
		}
		.item-info h5{
			margin-top: 5px;
			margin-bottom: 0px;
		}
		.set-item-info h5{
			margin-top: 5px;
			margin-bottom: 0px;
		}
		.set-item-sub-info h5{
			display: inline;
			/*margin-right: 10px;*/
		}
		.total-info h5{
			margin-top: 0px;
			margin-bottom: 10px;
		}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">

		<div class="over-select">
			<div class="center">
				<h5 style="margin-top: 30px !important;">LIBRASUN SNACKS</h5>
				<h5>Mid Valley City,</h5>
				<h5>Lingkaran Syed Putra,</h5>
				<h5>59200 Kuala Lumpur</h5>
			</div>
			<div class="row">
				<div class="shift-info">
					<div class="col-sm-4 col-xs-4">
						<h5>Receipt No.{{ $data->id }}</h5>
						<h5>Shift {{ $data->shift->name }}</h5>
						<h5>Cashier:SUPPORT</h5>
						<h5>DINE-IN</h5>
					</div>
					<div class="col-sm-8 col-xs-8 text-label-right">
						<h5>{{ $data->cashier->fullname }}</h5>
						<h5>{{ Carbon\Carbon::now()->format('d / m / Y') }}</h5>
						<h5>{{ Carbon\Carbon::now()->format('d / m / Y H:i:s') }}</h5>
					</div>
				</div>
			</div>

			<hr style="margin-top: 8px;margin-bottom: 8px;border-top: 1px dashed;">
			<div class="row">
				<div class="shift-info">
					<div class="col-sm-1 col-xs-1">
						<h5>QTY</h5>
					</div>
					<div class="col-sm-6 col-xs-6">
						<h5>ITEM</h5>
					</div>
					<div class="col-sm-2 col-xs-2 text-amount-right">
						<h5>AMOUNT</h5>
					</div>
				</div>
			</div>
			<hr style="margin-top: 8px;margin-bottom: 8px;border-top: 1px dashed;">
			
			@foreach ( $data->sellitems as $item )
			<div class="row">
				@if ($item->product != null)
				<div class="item-info" style="color: #4d88ff">
					@elseif ( $item->set != null)
					<div class="item-info" style="color: #c65353">
						@endif
						<div class="col-sm-1 col-xs-1">
							<h5 style="padding-left: 10px;">{{ $item->product_qty }}</h5>
						</div>
						<div class="col-sm-6 col-xs-6">
							@if ($item->product != null)
							<h5>{{ $item->product->name }}</h5>
							@elseif ( $item->set != null)
							<h5>{{ $item->set->name }}</h5>
							@endif
						</div>
						<div class="col-sm-2 col-xs-2 text-amount-right">
							@if ($item->product != null)
							<h5>{{ sprintf("%.2f", $item->product->price * $item->product_qty) }}</h5>
							@elseif ( $item->set != null)
							<h5>{{ sprintf("%.2f", $item->set->price * $item->product_qty) }}</h5>
							@endif
						</div>
					</div>
				</div>

				@if ( $item->product != null && $item->product->extra != null)
				<div class="row">
					<div class="set-item-info" style="color: #00cc44">
						<div class="col-sm-1 col-xs-1">
						</div>
						<div class="col-sm-6 col-xs-6 set-item-sub-info">
							<h5><span>{{ $item->product_qty }} </span> {{ $item->product->extra->name }}</h5>
						</div>
						<div class="col-sm-2 col-xs-2 text-amount-right">
							<h5>{{ sprintf("%.2f", $item->product->extra->price * $item->product_qty) }}</h5>
						</div>
					</div>
				</div>
				@endif

				@if ( $item->set != null)
				<div class="row">
					<div class="set-item-info" style="color: #c65353">
						<div class="col-sm-1 col-xs-1">
						</div>
						<div class="col-sm-6 col-xs-6 set-item-sub-info">
							<h5><span>{{ $item->product_qty }} </span> {{ $item->set->productone->name }}</h5>
						</div>
						<div class="col-sm-2 col-xs-2 text-amount-right">
							<h5>0.00</h5>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="set-item-info" style="color: #c65353">
						<div class="col-sm-1 col-xs-1">
						</div>
						<div class="col-sm-6 col-xs-6 set-item-sub-info">
							<h5><span>{{ $item->product_qty }} </span> {{ $item->set->producttwo->name }}</h5>
						</div>
						<div class="col-sm-2 col-xs-2 text-amount-right">
							<h5>0.00</h5>
						</div>
					</div>
				</div>
				@endif

				@endforeach
				<hr style="margin-top: 8px;margin-bottom: 8px;border-top: 1px dashed;">

				<div class="row">
					<div class="total-info">
						<div class="col-sm-7 col-xs-7 total-label-right">
							<h5>Sub Total</h5>
							@if(!is_null($data->discount_amount)) <h5>Discount %</h5> @endif
							<h5>Grand Total</h5>
							<h5>CASH</h5>
						</div>
						<div class="col-sm-3 col-xs-3 total-amount-right">
							<h5>{{ $data->total_cost }}</h5>
							@if(!is_null($data->discount_amount)) <h5>{{ $data->discount_amount }}</h5> @endif
							<h5>{{ $data->net_amount }}</h5>
							<h5>{{ $data->net_amount }}</h5>
						</div>
					</div>
				</div>
				{{-- <br> --}}
				<div class="center">
					<h5 style="margin-top: 30px !important;">CUSTOMER HOTLINE</h5>
					<h5>(060) 3 228 7777</h5>
					<h5>***Thank You!***</h5>
					<h5>(Creaded by SanWinMaung!)</h5>
				</div>		

			</div>

		</div>
	</body>
	</html>