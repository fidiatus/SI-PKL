@extends('layout.default')

@section('content')
<h1>Create Jadwal Post</h1>

<form class="" action="/mahasiswa"  method="post">
	<p> NIP
	<input type="text" name="nip" value="" placeholder="nip">
	{{ ($errors->has('nip'))? $errors->first('nip'): ''}} </p>
	<p> Jadwal PKL Mulai
	<div class="col-md-3">
        <input type="text" name="jadwal_mulai" class="form-control has-feedback-left" id="single_cal1" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
     {{ ($errors->has('jadwal_mulai'))? $errors->first('jadwal_mulai'): ''}} </p>
	</div><br><br><br><br>
	<p> Jadwal PKL Akhir
	<div class="col-md-3">
        <input type="text" name="jadwal_selesai" class="form-control has-feedback-left" id="single_cal2" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
     {{ ($errors->has('jadwal_selesai'))? $errors->first('jadwal_selesai'): ''}} </p>
	</div><br><br><br><br>
	<p> Jadwal Bimbingan
	<div class="col-md-3">
        <input type="text" name="jadwal_bimbingan" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_bimbingan'))? $errors->first('jadwal_bimbingan'): ''}} </p>
	</div><br><br><br>
	<p> Jadwal dan Waktu Sidang
	<div class="col-md-3">
        <input type="text" name="jadwal_waktu_sidang" class="form-control has-feedback-left" id="single_cal3" placeholder="First Name" aria-describedby="inputSuccess2Status3">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_waktu_sidang'))? $errors->first('jadwal_waktu_sidang'): ''}} </p>
	</div><br><br><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection