@extends('layout.default')

@section('content')
<h1>Create Bimbingan Post</h1>

<form class="" action="/bimbingan"  method="post">
	<p> Dosen : 
	<select name="dosen_id">
		<option> --Pilihan-- </option>
		@foreach($dosen as $dosen)
			<option value="{{ $dosen->nip }}"> {{ $dosen->nama_dosen }} </option>
		@endforeach
	</select>
	{{ ($errors->has('dosen_id'))? $errors->first('dosen_id'): ''}} </p>
	<p> Mahasiswa Bimbingan : 
	<select name="mahasiswa_id">
		<option> --Pilihan-- </option>
		@foreach($mahasiswa as $mahasiswa)
			<option value="{{ $mahasiswa->id }}"> {{ $mahasiswa->nama}} </option>
		@endforeach
	</select>
	{{ ($errors->has('mahasiswa_id'))? $errors->first('mahasiswa_id'): ''}} </p>
	<p> Jadwal Bimbingan : 
	<div class="col-md-3">
        <input type="text" name="jadwal_bimbingan" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status2">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_bimbing'))? $errors->first('jadwal_bimbing'): ''}} </p>
	</div><br><br><br>	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection