@extends('layout.default')

@section('content')
<h1>Edit Data Dosen </h1>

<form class="form-horizontal" action="/bimbingan/{{$bimbingan->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">Dosen</label>
		<select name="dosen_id">
		@foreach($dosen as $dosen)
			<input value="{{ $dosen->nip }}"> {{ $dosen->nama_dosen }} 
		@endforeach
	</div>
	<div class="form-group">
		<label class="col-md-4">Mahasiswa Bimbingan</label>
		@foreach($mahasiswa as $mahasiswa)
			<input value="{{ $mahasiswa->id }}"> {{ $mahasiswa->nama}} 
		@endforeach
	</div>
	<div class="form-group">
		<label class="col-md-4">Jadwal Bimbingan</label>
		<input class="form-control col-md-8" name="jadwal_bimbingan" value="{{ $pkl->jadwal_bimbingan }}">
	</div>
</form>
@endsection