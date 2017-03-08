@extends('layout.default')

@section('content')
<h1>Create prodi Post</h1>

<form class="" action="/prodi"  method="post">
	<p> Nama : 
	<input type="text" name="nama_prodi" value="" placeholder="nama_prodi">
	{{ ($errors->has('nama_prodi'))? $errors->first('nama_prodi'): ''}} </p>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection