@extends('layout.default')

@section('content')
<h1>Create Bidang Post</h1>

<form class="" action="/bidang"  method="post">
	<p> Nama : 
	<input type="text" name="bidang" value="" placeholder="bidang">
	{{ ($errors->has('bidang'))? $errors->first('bidang'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection