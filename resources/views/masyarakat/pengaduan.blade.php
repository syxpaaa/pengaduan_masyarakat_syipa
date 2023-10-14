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
                    Gagal login
                  </div>
                @endif

                <form action="{{url('masyarakat/login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="tanggalpengaduan" class="form-label">Tanggal pengaduan</label>
                        <input type="date" class="form-control" name="tanggalpengaduan" id="tanggalpengaduan
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
                        <label for="isilaporan" class="form-label">Isi Laporan</label>
                        <textarea class="form-control" name="isilaporan" id="isilaporan" placeholder="Isi Laporan" rows="3"></textarea>
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
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" id="status" placeholder="Status">
                        @error('status')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Laporkan</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
@endsection