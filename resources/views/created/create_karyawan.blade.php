
@extends('utama.index')

@section('title', 'halaman utama')

@section('content')

<div class="row">
	<div class="col-md-12">
		@if ($erorrs->any())
	<div class="alert alaert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li> {{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
		
@endsection 
