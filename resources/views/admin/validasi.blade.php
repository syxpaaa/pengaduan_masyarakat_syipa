@extends('petugaslayot')

@section('title', 'Dashboard Admin')
    
@section('content')
<table class="table table-striped table-hover" >
    <thead>
      <tr>
        <th scope="col">nik</th>
        <th scope="col">foto</th>
        <th scope="col">isi laporan</th>
        <th scope="col">tanggal pengaduan</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $aziz)
        <tr>
            <td>{{$aziz->nik}}</td>
            <td><img src="upload_data/{{$aziz->foto}}" alt="" style="width: 50px"></td>
            <td>{{$aziz->isi_laporan}}</td>
            <td>{{$aziz->tgl_pengaduan}}</td>
            <td>
              <a href="{{url('status/'.$aziz->id_pengaduan)}}" class="btn btn-light" type="submit" class="btn btn-light" style="background-color: #abd9fa;">
              @switch($aziz)
                  @case('proses')
                      proses
                      @break
                  @case('selesai')
                      selesai
                      @break
                  @default
                      tertunda
              @endswitch
            </td>
            <td>                                   
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection