<div class="col-md-5 grid-margin stretch-card">
	<div class="card">

		<div class="card-body" style="height: 600px;">
			<table class="table table-bordered cart-table">
				<thead class="thead-dark">
					<tr style="text-align: center;">
						<th scope="col" style="max-width: 137px;min-width: 137px;">Product</th>
						<th scope="col">Qty</th>
						<th scope="col">Price</th>
						<th scope="col"><i class="fa fa-trash-o"></i></th>
					</tr>
				</thead>
				<tbody id="cart-items-list">
				</tbody>
			</table>
		</div>

		<div class="card-footer" style="height: 250px;background-color: black;">
			<div class="row" style="color: #fff;">

				<div class="col-md-6" style="margin-bottom: 40px;">
					Items : <span class="pull-right" id="total-item">0 Pcs || </span>
				</div>
				<div class="col-md-6">
					Total Cost : <span class="pull-right" id="total-cost">0.00</span>
				</div>

				<div class="col-md-12">
					Discount : 
					<input type="text" id="discount-percent" style="margin: 0 10px 40px 20px;text-align: right;"><span style="font-size: 22px;">%</span>
					<span class="pull-right" id="discount-amount">0.00</span>
				</div>

				<div class="col-md-12" style="margin-bottom: 30px;">
					Net Amount : <span class="pull-right" id="net-amount">0.00</span>
				</div>

				<div class="col-md-12">
					<a class="btn btn-primary" onclick="reload()">Cancel</a>
					<form action="{{ route('proceed.selling') }}" method="POST" style="display: inline;">
						@csrf
						<input type="hidden" value="" id="hidden-discount-amount" name="discount">
						<button class="btn btn-success pull-right">Proceed</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>