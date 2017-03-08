@extends('layout.default')

@section('content')
<h1> Data Dosen </h1>

<form class="form-horizontal" action="/dosen/{{$dosen->nip}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIP</label>
		<input class="form-control col-md-8" name="nip" value="{{ $dosen->nip }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Nama</label>
		<input class="form-control col-md-8" name="nama_dosen" value="{{ $dosen->nama_dosen }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Status</label>		
		@foreach($status as $status)
			<input value="{{ $status->id }}"> {{ $status->nama_status }} </input>
		@endforeach
	</div>
	<div class="form-group">
		<label class="col-md-4">Bidang</label>		
		@foreach($bidang as $bidang)
			<input value="{{ $bidang->id }}"> {{ $bidang->nama_bidang }} 
		@endforeach
	</div>
	<div class="form-group">
		<label class="col-md-4">Jenis kelamin</label>		
		<input class="form-control col-md-8" name="jenis_kelamin" value="{{ $dosen->jenis_kelamin }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Tanggal Lahir</label>
		<div class="col-md-3">
        <input type="text" name="Tanggal_lahir" value="{{ $mahasiswa->Tanggal_lahir }}" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        </div>
	</div>
	<div class="form-group">
		<label class="col-md-4">Alamat</label>
		<input class="form-control col-md-8" name="alamat" value="{{ $dosen->alamat }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">No.HP</label>
		<input class="form-control col-md-8" name="no_hp" value="{{ $dosen->no_hp}}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Username</label>
		<input class="form-control col-md-8" name="username" value="{{ $dosen->username }}">
	</div>
	<div class="form-group">
		<label class="col-md-4">Email</label>
		<input class="form-control col-md-8" name="email" value="{{ $dosen->email }}">
	</div>
	<br/>
</form>
@endsection