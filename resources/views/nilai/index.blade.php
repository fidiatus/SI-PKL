@extends('layout.default')

@section('content')
  <div class="row">
  <div class="col-md-16 col-sm-16 col-xs-18">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Data<small>nilai</small></h2>
          <div class="clearfix"></div>
      </div>
          <div class="x_content">
            <table class="table table-bordered">
              <thead>
                <tr> 
                  <th> ID </th>
                  <th> NIM  </th> 
                  <th> nilai1 </th>
                  <th> nilai2 </th>
                  <th> nilai3 </th>
                  <th> nilai4 </th>
                  <th> nilai5 </th>
                  <th> nilai6 </th> 
                  <th> nilai7 </th>
                  <th> nilai8 </th> 
                  <th> nilai9 </th>
                  <th> nilai10 </th>
                  <th> nilai11  </th>
                  <th> nilai12 </th>
                  <th> nilai13 </th> 
                  <th> nilai14 </th> 
                  <th> Hasil </th> 
                  <th> Nilai Pembimbing </th> 
                  <th> Nilai Penguji </th>
                  <th> Jumlah Nilai </th> 
                  <th> Total </th> 
                  <th> Aksi </th> 
                </tr>
              </thead>
            <tbody>
              @foreach ($nilais as $nilai)                        
                <tr>
                  <td> {{$nilai->id}} </td>
                  <td> {{$nilai->nim}}</td>
                  <td>{{$nilai->disiplin}}</td>
                  <td>{{$nilai->motivasi}}</td>
                  <td>{{$nilai->loyalitas}}</td>
                  <td>{{$nilai->tanggung}}</td>
                  <td>{{$nilai->kerajinan}}</td>
                  <td>{{$nilai->pemahaman}}</td>
                  <td>{{$nilai->kemampuan}}</td>
                  <td>{{$nilai->perawatan}}</td>
                  <td>{{$nilai->kepercayaan}}</td>
                  <td>{{$nilai->kecakapan}}</td>
                  <td>{{$nilai->keterampilan}}</td>
                  <td>{{$nilai->kerjasama}}</td>
                  <td>{{$nilai->kelelamatan}}</td>
                  <td>{{$nilai->akhlak}}</td>
                  <td>{{$nilai->hasil}}</td>
                  <td>{{$nilai->nilai_pembimbing}}</td>
                  <td>{{$nilai->nilai_penguji}}</td>
                  <td>{{$nilai->jum}}</td>
                  <td>{{$nilai->total}}</td>
                  <td> 
                    <a href="/nilai/{{$nilai->id}}/edit" class="btn btn-xs btn-success"><i class="fa fa-pencil-square-o"></i> </a>
                      <form class="" action="/nilai/{{$nilai->id}}" name="name" method="post">
                        <button name="" class="btn btn-xs btn-warning"> <i class="fa fa-trash"></i> </button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="delete">
                      </form>
                  </td> 
                </tr> 
              @endforeach
            </tbody>
          </table>
        {!! $nilais->links() !!} 
      </div>
    </div>
  </div>
</div>           
@endsection
          