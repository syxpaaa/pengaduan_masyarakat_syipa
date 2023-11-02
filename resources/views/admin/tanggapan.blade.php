@extends('petugasLayot')

@section('title', 'Dashboard Admin')

@section('content')
<div class="card shadow mt-4">
    <div class="card-header" style="background-color: #abd9fa;">
        <h4 class="card-title">Tanggapan anda</h4>
    </div>
    <div class="card-body">
        @if (session('pesan'))
            <div class="alert alert-danger" role="alert">
                {{session('pesan')}}
              </div>
            @endif
        <form action="{{url('simpenken')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="" class="col-form-label col-2">NIK</label>
                <div class="col-10">
                    <input type="number" class="form-control" name="nik" id="nik" placeholder="NIK">
                    @error('nik')
                        <div class="form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-form-label col-2">Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-form-label col-2">Isi Laporan</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="isi_laporan">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn" style="background-color: #abd9fa;">KIRIM</button>
              </div>
        </form>
    </div>
  </div>
@endsection