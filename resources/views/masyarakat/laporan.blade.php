@extends('masyarakatlayuot')

@section('konten')
<table class="table table-striped table-hover" >
    <thead>
      <tr>
        <th scope="col">nik</th>
        <th scope="col">foto</th>
        <th scope="col">isi laporan</th>
        <th scope="col">tanggal</th>
        <th scope="col">status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $inem)
        <tr>
            <td>{{$inem->nik}}</td>
            <td><img src="/upload_data/{{$inem->foto}}" alt="" style="width: 50px"></td>
            <td>{{$inem->isi_laporan}}</td>
            <td>{{$inem->tgl_pengaduan}}</td>
            <td>                                   
                <a href="{{url('tanggapan')}}" class="btn btn-primary">
                <i class="bi bi-plus-circle-fill"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection

