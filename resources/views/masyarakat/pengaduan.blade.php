@extends('masyarakatlayuot')

@section('konten')
<div id="main" class="d-flex align-items-center vh-100">
    <div class="container">
        <div class="card shadow m-auto" style="width: 400px;">
            <div class="card-body">
                
                <h4 class="h4">Laporkan Pengaduan anda</h4>
                @if (session('pesan'))
                <div class="alert alert-primary" role="alert">
                    {{session('pesan')}}
                  </div>
                @endif
                  {{--pesan jika validasi gagal--}}
                @if ($errors->any())
                <div class="alert alert-primary" role="alert">
                    Isi Semua Kolom
                  </div>
                @endif

                <form action="{{url('pengaduan')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="tgl_pengaduan" class="form-label">Tanggal pengaduan</label>
                        <input type="date" class="form-control" name="tgl_pengaduan" id="tgl_pengaduan
                        " placeholder="Tanggal pengaduan">
                        @error('Tanggal pengaduan')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik">
                        @error('Nik')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="isi_laporan" class="form-label">Isi Laporan</label>
                        <textarea class="form-control" name="isi_laporan" id="isilaporan" placeholder="Isi_Laporan" rows="3"></textarea>
                        @error('Isi Laporan')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="foto" class="form-label">foto</label>
                        <input type="file" class="form-control" name="foto" id="foto" placeholder="foto">
                        @error('foto')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-outline-info mb-2" type="submit">kirim</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
@endsection