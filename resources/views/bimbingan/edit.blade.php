@extends('layout.default')

@section('content')
<h1>Edit Data Dosen </h1>

<form class="form-horizontal" action="/bimbingan/{{$bimbingan->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">Dosen</label>
		<select name="dosen_id">
		<option> --Pilihan-- </option>
		@foreach($dosen as $dosen)
			<option value="{{ $dosen->nip }}"> {{ $dosen->nama_dosen }} </option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		<label class="col-md-4">Mahasiswa Bimbingan</label>
		<select name="mahasiswa_id">
		<option> --Pilihan-- </option>
		@foreach($mahasiswa as $mahasiswa)
			<option value="{{ $mahasiswa->id }}"> {{ $mahasiswa->nama}} </option>
		@endforeach
	</select>
	</div>
	<div class="form-group">
		<label class="col-md-4">Jadwal Bimbingan</label>
		<input class="form-control col-md-8" name="jadwal_bimbingan" value="{{ $bimbingan->jadwal_bimbingan }}">
	</div>
	<br/>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection