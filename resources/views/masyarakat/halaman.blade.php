@extends('masyarakatlayuot')
@section('konten')
    
<div class="card shadow mt-4 text-center">

    <div class="card-body">
        @if (session('pesan'))
            <div class="alert alert-danger" role="alert">
                {{session('pesan')}}
              </div>
            @endif
        
            @csrf
            <h1 class="py-5">SELAMAT DATANG!!</h1>
            <h3>Layanan Aspirasi dan Pengaduan Online Rakyat</h3>
            <h4>Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang</h4>
            <a href="{{url('pengaduan')}}" class="btn btn-outline-light my-3" style="background-color: #bbc0fc;">Tulis Pengaduan</a>
    </div>
</div>
@endsection
