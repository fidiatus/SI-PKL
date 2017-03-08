@extends('layout.default')

@section('content')
<h1>Create status Post</h1>

<form class="" action="/status"  method="post">
	<p> Nama : 
	<input type="text" name="status" value="" placeholder="status">
	{{ ($errors->has('status'))? $errors->first('status'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection