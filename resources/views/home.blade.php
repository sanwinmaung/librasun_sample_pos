@extends ('layouts.master')
@section('style')
<style>
	.center{
		text-align: center;
	}
	.center h1, .center h2, .center h4{
		margin-top: 30px;
	}
	.center h2{
		color: #00b3b3;
	}
</style>
@stop
@section('nav')
@include('layouts.nav-bottom')
@stop
@section ('content')

<div class="center">
	{{-- <h1>Welcome</h1> --}}
	<img src="{{ asset('admin_theme/images/welcome.png') }}" alt="welcome" width="1000" height="auto">
	<h2>Librasun Mini POS</h2>
	<h4>Created by San Win Maung</h4>
	
</div>

@stop