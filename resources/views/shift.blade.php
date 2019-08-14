@extends('layouts.master')
@section('content')

<div class="row">
	@foreach ($shifts as $shift)
	<div class="col-md-6 col-lg-3 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h1 class="font-weight-light mb-4" style="text-align: center;font-weight: bold;color: #44519e;">Shift {{ $shift->name }}</h1>
				<div class="d-flex flex-wrap align-items-center">
					<a href="{{ route('shift', $shift->id) }}">
						<img src="{{ asset('admin_theme/images/shop-logo.png') }}" alt="" width="200" height="200">
					</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@stop