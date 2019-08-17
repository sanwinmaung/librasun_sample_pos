<div class="col-md-7 grid-margin stretch-card">
	<div class="card">
		<div class="card-body">
			{{-- <div class="d-flex align-items-start justify-content-between">
				<h4 class="card-title">Products List</h4>
			</div> --}}
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
											<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-sets" role="tab" aria-controls="nav-profile" aria-selected="false">Sets Menu</a>
										</div>
									</nav>
									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-home-tab">
											<div class="row">
												<div class="col-12">
													<div class="table-responsive">
														<table id="order-listing" class="table table-bordered products-table">
															<thead>
																<tr>
																	<th>Code</th>
																	<th>Name</th>
																	<th>Price</th>
																	<th>Add</th>
																</tr>
															</thead>
															<tbody>
																@foreach ($products as $product)
																<tr>
																	<td style="color: #0062cc;font-weight: bold;">{{ $product->code }}</td>
																	<td>{{ $product->name }}</td>
																	<td>{{ $product->price }}</td>
																	<td><a class="btn btn-success add-product" style="color: #ffffff;padding: 6px;" id="add-product">Add</a></td>
																</tr>
																@endforeach
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane fade" id="nav-sets" role="tabpanel" aria-labelledby="nav-profile-tab">
											<table id="order-listing" class="table table-bordered set-products-table">
												<thead>
													<tr>
														<th>Code</th>
														<th>Item One</th>
														<th>Item Two</th>
														<th>Name</th>
														<th>Price</th>
														<th>Add</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($sets as $set)
													<tr>
														<td style="color: #0062cc;font-weight: bold;">{{ $set->code }}</td>
														<td>{{ $set->productone->name }}</td>
														<td>{{ $set->producttwo->name }}</td>
														<td>{{ $set->name }}</td>
														<td>{{ $set->price }}</td>
														<td><a class="btn btn-success add-product" style="color: #ffffff;padding: 6px;" id="add-product">Add</a></td>
													</tr>
													@endforeach
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