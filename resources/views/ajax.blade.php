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
		<div class="row">
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
		<hr>
		<div class="row">
			<div class="col-md-7 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-start justify-content-between">
							<h4 class="card-title">Products List</h4>
						</div>
						{{-- <div>
							<input class="form-control" type="text" name="keyword" id="product" placeholder="Search Product">
						</div> --}}
						<div class="products-show">
							{{-- <a href="" class="btn btn-info">All Products</a>
							<a href="" class="btn btn-info">All Products</a> --}}
							{{-- @foreach ($products as $products) --}}
							<div class="row">
								<div class="col-md-12">
									<nav>
										<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
											<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-home" aria-selected="true">Products</a>
											<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-sets" role="tab" aria-controls="nav-profile" aria-selected="false">Sets</a>
										</div>
									</nav>
									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-home-tab">
											<table class="table table-bordered products-table" cellspacing="0">
												<thead>
													<tr>
														{{-- <th>No</th> --}}
														<th>Code</th>
														<th>Name</th>
														<th>Price</th>
													</tr>
												</thead>
												<tbody>
													<tr v-for="(product, key) in products">
														<td>{{ product }}</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="tab-pane fade" id="nav-sets" role="tabpanel" aria-labelledby="nav-profile-tab">
											<table class="table" cellspacing="0">
												<thead>
													<tr>
														<th>Project Name</th>
														<th>Employer</th>
														<th>Time</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><a href="#">Work 1</a></td>
														<td>Doe</td>
														<td>john@example.com</td>
													</tr>
													<tr>
														<td><a href="#">Work 2</a></td>
														<td>Moe</td>
														<td>mary@example.com</td>
													</tr>
													<tr>
														<td><a href="#">Work 3</a></td>
														<td>Dooley</td>
														<td>july@example.com</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered">
							<thead class="thead-dark">
								<tr style="text-align: center;">
									<th scope="col">Product</th>
									<th scope="col">Qty</th>
									<th scope="col">Price</th>
									<th scope="col"><i class="fa fa-trash-o"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Mark</td>
									<td>Otto</td>
									<td>@mdo</td>
								</tr>
								<tr>
									<td>Jacob</td>
									<td>Thornton</td>
									<td>@fat</td>
								</tr>
								<tr>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

{{-- <script type="text/javascript">
	$(function () {
		$('.products-table').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('products.data') }}",
			columns: [
				// {data: 'DT_RowIndex', name: 'DT_RowIndex'},
				{data: 'code', name: 'code'},
				{data: 'name', name: 'name'},
				{data: 'price', name: 'price'},
				]
			});
	});
</script> --}}

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="/js/main.js"></script>
@endpush