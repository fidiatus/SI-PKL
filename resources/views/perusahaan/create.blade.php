@extends('layout.default')

@section('content')
<h1>Create Perusahaan Post</h1>

<form class="" action="/perusahaan"  method="post">
	<p> Nama Perusahaan :
	<input type="text" name="nama_perusahaan" value="" placeholder="nama_perusahaan">
	{{ ($errors->has('nama_perusahaan'))? $errors->first('nama_perusahaan'): ''}} </p>
	<p> Email :
	<input type="text" name="email" value="" placeholder="email">
	{{ ($errors->has('email'))? $errors->first('email'): ''}} </p>
	<p> No.Telp : 
	<input type="text" name="telepon" value="" placeholder="telepon">
	{{ ($errors->has('telepon'))? $errors->first('telepon'): ''}}</p>
	<p> Alamat : 
	<textarea name="alamat" rows="3" cols="30" placeholder="isi. . ."></textarea>
	{{ ($errors->has('alamat'))? $errors->first('alamat'): ''}} </p>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection