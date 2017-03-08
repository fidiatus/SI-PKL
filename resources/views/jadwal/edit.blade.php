@extends('layout.default')

@section('content')
<h1>Edit Jadwal Post</h1>

<form class="" action="/jadwal/{{$jadwal->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIP</label>
		<input class="form-control col-md-8" name="nip" value="{{ $jadwal->nip }}">
	</div>
	<p> Jadwal PKL Mulai
	<div class="col-md-3">
        <input type="text" name="jadwal_mulai" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_mulai'))? $errors->first('jadwal_mulai'): ''}} </p>
	<p> Jadwal PKL Berakhir
	<div class="col-md-3">
        <input type="text" name="jadwal_selesai" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_selesai'))? $errors->first('jadwal_selesai'): ''}} </p>
	<p> Jadwal Bimbingan
	<div class="col-md-3">
        <input type="text" name="jadwal_bimbingan" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_bimbingan'))? $errors->first('jadwal_bimbingan'): ''}} </p>
	<p> Jadwal dan Waktu Sidang
	<div class="col-md-3">
        <input type="text" name="jadwal_waktu_sidang" class="form-control has-feedback-left" id="single_cal4" placeholder="First Name" aria-describedby="inputSuccess2Status4">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	{{ ($errors->has('jadwal_waktu_sidang'))? $errors->first('jadwal_waktu_sidang'): ''}} </p></div>
	<input type="hidden" name="_method" value="put">	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="edit">
</form>
@endsection