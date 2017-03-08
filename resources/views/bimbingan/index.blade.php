@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Bimbingan</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
    <thead>
        <tr> 
          <th> ID </th>
          <th> Dosen </th> 
          <th> Mahasiswa Bimbingan</th>
          <th> Jadwal Bimbingan </th> 
          <th> Aksi </th> 
        </tr>
    </thead>
    <tbody>
    		@foreach($bimbingans as $bimbingan)
		<tr>
            <td> {{$bimbingan->id}} </td>
            <td>{{$bimbingan->nama_dosen}}</td>
            <td> {{$bimbingan->nama}} </td>
            <td>{{$bimbingan->jadwal_bimbingan}}</td>      
            <td> <a href="/bimbingan/{{$bimbingan->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
                <form class="" action="/bimbingan/{{$bimbingan->id}}" name="name" method="post">
                <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="delete">
                  </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $bimbingans->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection