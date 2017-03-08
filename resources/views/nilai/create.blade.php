@extends('layout.default')

@section('content')
<h1>Create Nilai Post</h1>

<form class="" action="/nilai"  method="post">
	<p> NIM :
	<input type="text" name="nim" value="" placeholder="nim">
	{{ ($errors->has('nim'))? $errors->first('nim'): ''}} </p>
	<p> Disiplin :
	<input type="text" name="nilai1" value="" placeholder="nilai1">
	{{ ($errors->has('nilai1'))? $errors->first('nilai1'): ''}} </p>
	<p> Motivasi :
	<input type="text" name="nilai2" value="" placeholder="nilai2">
	{{ ($errors->has('nilai2'))? $errors->first('nilai2'): ''}} </p>
	<p> Loyalitas :
	<input type="text" name="nilai3" value="" placeholder="nilai3">
	{{ ($errors->has('nilai3'))? $errors->first('nilai3'): ''}} </p>
	<p> Tanggung Jawab : 
	<input type="text" name="nilai4" value="" placeholder="nilai4">
	{{ ($errors->has('nilai4'))? $errors->first('nilai4'): ''}} </p>
	<p> Kerajinan/Ketekunan :
	<input type="text" name="nilai5" value="" placeholder="nilai5">
	{{ ($errors->has('nilai5'))? $errors->first('nilai5'): ''}} </p>
	<p> Pemahaman Tugas : 
	<input type="text" name="nilai6" value="" placeholder="nilai6">
	{{ ($errors->has('nilai6'))? $errors->first('nilai6'): ''}} </p>
	<p> Kemampuan Melaksanakan Tugas :
	<input type="text" name="nilai7" value="" placeholder="nilai7">
	{{ ($errors->has('nilai7'))? $errors->first('nilai7'): ''}} </p>
	<p> Perawatan Peralatan : 
	<input type="text" name="nilai8" value="" placeholder="nilai8">
	{{ ($errors->has('nilai8'))? $errors->first('nilai8'): ''}} </p>
	<p> Kepercayaan Diri :
	<input type="text" name="nilai9" value="" placeholder="nilai9">
	{{ ($errors->has('nilai9'))? $errors->first('nilai9'): ''}} </p>
	<p> Kecakapan Mengambil Keputusan: 
	<input type="text" name="nilai10" value="" placeholder="nilai10">
	{{ ($errors->has('nilai10'))? $errors->first('nilai10'): ''}} </p>
	<p> Keterampilan Menggunakan Alat :
	<input type="text" name="nilai11" value="" placeholder="nilai11">
	{{ ($errors->has('nilai12'))? $errors->first('nilai12'): ''}} </p>
	<p> Kerjasama :
	<input type="text" name="nilai12" value="" placeholder="nilai12">
	{{ ($errors->has('nilai12'))? $errors->first('nilai12'): ''}} </p>
	<p> Kelelamatan kerja: 
	<input type="text" name="nilai13" value="" placeholder="nilai13">
	{{ ($errors->has('nilai13'))? $errors->first('nilai13'): ''}} </p>
	<p> Akhlak/kelakuan :
	<input type="text" name="nilai14" value="" placeholder="nilai14">
	{{ ($errors->has('nilai14'))? $errors->first('nilai14'): ''}} </p>
	<p> Hasil :
	<input type="text" name="hasil" value="" placeholder="hasil">
	{{ ($errors->has('hasil'))? $errors->first('hasil'): ''}} </p>
	<p> Nilai Pembimbing :
	<input type="text" name="nilai_pembimbing" value="" placeholder="nilai_pembimbing">
	{{ ($errors->has('nilai_pembimbing'))? $errors->first('nilai_pembiming'): ''}} </p>
	<p> Nilai Penguji :
	<input type="text" name="nilai_penguji" value="" placeholder="nilai_penguji">
	{{ ($errors->has('nilai_penguji'))? $errors->first('nilai_penguji'): ''}} </p>
	<p> jumlah Nilai : 
	<input type="text" name="jumlah" value="" placeholder="jumlah">
	{{ ($errors->has('jumlah'))? $errors->first('jumlah'): ''}} </p>
	<p> Total Nilai :
	<input type="text" name="total" value="" placeholder="total">
	{{ ($errors->has('total'))? $errors->first('total'): ''}} </p>
	<br/>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="submit" name="name" value="post">
</form>
@endsection

@section('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script>
	arr= new int[14];
	arr[0]="nilai1";
	arr[1]="nilai2";
	arr[2]="nilai3";
	arr[3]="nilai4";
	arr[4]="nilai5";
	arr[5]="nilai6";
	arr[6]="nilai7";
	arr[7]="nilai8";
	arr[8]="nilai9";
	arr[9]="nilai10";
	arr[10]="nilai11";
	arr[11]="nilai12";
	arr[12]="nilai13";
	arr[13]="nilai14";

	function nilai(arr)){
		var hasil=0;
		for(int i = 0; i < arr.length; i++){

			hasil=hasil+i;
		};
		return hasil;
	}
/*
	var nilai = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
	var hasil=0;
	for(var i in nilai) {
    	hasil += nilai[i];
	}document.getElementById("demo").innerHTML = hasil/nilai.length
	var hasil = hasil/14;
	$('#hasil').val(hasil/14);

	var y = +$('input[name=nilai_pembimbing]').val();
	var z = +$('input[name=nilai_penguji]').val();
	var jumlah =hasil + y + z;
	$('#jumlah').val(hasil+y+z);

	var total =jumlah /3 ;
	$('#total').val(jumlah/3);
	*/
</script>
@endsection