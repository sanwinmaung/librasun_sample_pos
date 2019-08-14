@extends('layouts.master')
@section('style')
<style>
	img {
		display: block;margin-left: auto;margin-right: auto;
	}
</style>
@stop
@section('content')

<div class="row">
	@foreach ($cashiers as $cashier)
	<div class="col-md-6 col-lg-4 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h1 class="font-weight-light mb-4" style="text-align: center;font-weight: bold;color: #44519e;"> {{ $cashier->fullname }}</h1>
				<div class="d-flex flex-wrap align-items-center">
					<a href="{{ route('cashier', $cashier->id) }}">
						<img src="{{ asset('admin_theme/images/user.ico') }}" align="center" width="50%" height="50%">
					</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@stop