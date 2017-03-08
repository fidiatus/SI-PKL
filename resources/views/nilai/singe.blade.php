@extends('layout.default')

@section('content')
<h1>Edit Data nilai </h1>

<form class="form-horizontal" action="/nilai/{{$nilai->id}}"  method="post">
	<div class="form-group">
		<label class="col-md-4">NIM</label>
		<input class="form-control col-md-8" name="nim" value="{{ $nilai->nim }}">
	</div>
	<div>
	<label class="col-md-4"> Disiplin</label>
	<input class="form-control col-md-8" name="nilai1" value="{{ $nilai->nilai1 }}">
	</div>
	<div>
	<label class="col-md-4"> Motivasi</label>
	<input class="form-control col-md-8" name="nilai2" value="{{ $nilai->nilai2}}">
	</div>
	<div>
	<label class="col-md-4"> Loyalitas</label>
	<input class="form-control col-md-8" name="nilai3" value="{{ $nilai->nilai3}}">
	</div>
	<div>
	<label class="col-md-4"> Tanggung Jawab</label>
	<input class="form-control col-md-8" name="nilai4" value="{{ $nilai->nilai4 }}">
	</div>
	<div>
	<label class="col-md-4"> Kerajinan/Ketekunan</label>
	<input class="form-control col-md-8" name="nilai5" value="{{ $nilai->nilai5}}">
	</div>
	<div>
	<label class="col-md-4"> Pemahaman Tugas</label>
	<input class="form-control col-md-8" name="nilai6" value="{{ $nilai->nilai6 }}">
	</div>
	<div>
	<label class="col-md-4"> Kemampuan Melaksanakan Tugas</label>
	<input class="form-control col-md-8" name="nilai7" value="{{ $nilai->nilai7}}">
	</div>
	<div>
	<label class="col-md-4"> Perawatan Peralatan</label>
	<input class="form-control col-md-8" name="nilai8" value="{{ $nilai->nilai8 }}">
	</div>
	<div>
	<label class="col-md-4"> Kepercayaan Diri</label>
	<input class="form-control col-md-8" name="nilai9" value="{{ $nilai->nilai9 }}"></div>
	<div>
	<label class="col-md-4"> Kecakapan Mengambil Keputusan</label>
	<input class="form-control col-md-8" name="nilai10" value="{{ $nilai->nilai10}}">
	</div>
	<div>
	<label class="col-md-4"> Keterampilan menggunakan Alat</label>
	<input class="form-control col-md-8" name="nilai11" value="{{ $nilai->nilai11 }}">
	</div>
	<div>
	<label class="col-md-4"> Kerjasama</label>
	<input class="form-control col-md-8" name="nilai12" value="{{ $nilai->nilai12 }}">
	</div>
	<div>
	<label class="col-md-4"> Kelelamatan Kerja</label>
	<input class="form-control col-md-8" name="nilai13" value="{{ $nilai->nilai13}}"></div>
	<div>
	<label class="col-md-4"> Akhlak/Kelakuan</label>
	<input class="form-control col-md-8" name="nilai14" value="{{ $nilai->nilai14}}">
	</div>
	<div>
	<label class="col-md-4"> Nilai Pembimbing</label>
	<input class="form-control col-md-8" name="nilai1_dosen" value="{{ $nilai->nilai1_dosen}}">
	</div>
	<div>
	<label class="col-md-4"> Jumlah nilai</label>
	<input class="form-control col-md-8" name="jumlah" value="{{ $nilai->jumlah}}">
	</div>
	<div>
	<label class="col-md-4"> Total Nilai</label>
	<input class="form-control col-md-8" name="total" value="{{ $nilai->total}}">
	</div>
	<br/>
</form>
@endsection