@extends ('layouts.master')
@section('style')
<style>
	.center{
		text-align: center;
	}
</style>
@stop
@section('nav')
@include('layouts.nav-bottom')
@stop
@section ('content')

<div class="center">
	<form action="{{ route('search.vocher') }}" method="POST">
		@csrf		
		<div class="form-group">
			<input type="text" class="form-control form-label" name="vocher_id" placeholder="Enter Vocher ID" width="500">
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Search</button>
		</div>
	</form>

</div>

@stop