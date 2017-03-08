@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-13 col-sm-13 col-xs-16">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>Jadwal</small></h2>
          <div class="clearfix"></div>
      		</div>
          <div class="x_content">
            <table class="table table-bordered">
            <thead>
                <tr>
                <th> ID </th>
                  <th> NIP Dosen </th> 
                  <th> Jadwal PKL Mulai </th>
                  <th> Jadwal PKL Selesai </th>
                  <th> Jadwal Bimbingan </th>
                  <th> Jadwal dan waktu Sidang  </th>
                  <th> Aksi </th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($jadwals as $jadwal)                        
                <tr>
	                <td>{{$jadwal->nip}}</td>
        					<td>{{$jadwal->jadwal_mulai}}</td>
                  <td>{{$jadwal->jadwal_selesai}}</td>
        					<td>{{$jadwal->jadwal_bimbingan}}</td>
        					<td>{{$jadwal->jadwal_waktu_sidang}}</td>
                  	<td> 
                    <a href="/jadwal/{{$jadwal->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
                      <form class="" action="/jadwal/{{$jadwal->id}}" name="name" method="post">
                        <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $jadwals->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection
