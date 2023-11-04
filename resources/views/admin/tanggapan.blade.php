@extends('petugasLayot')

@section('title', 'tanggapan Admin')

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
                <label for="id_pengaduan" class="col-form-label col-2">id pengaduan</label>
                <div class="col-10">
                    <input type="number" class="form-control" name="id_pengaduan" id="id_pengaduan">
                    @error('id_pengaduan')
                        <div class="form-text">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nik" class="col-form-label col-2">nik</label>
                <div class="col-10">
                    <input type="number" class="form-control" name="nik" id="nik">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="laporan" class="col-form-label col-2">laporan</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="laporan" id="laporan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggapan" class="col-form-label col-2">Tanggapan</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="tanggapan" id="tanggapan">
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn" style="background-color: #abd9fa;">KIRIM</button>
              </div>
        </form>
    </div>
  </div>
@endsection