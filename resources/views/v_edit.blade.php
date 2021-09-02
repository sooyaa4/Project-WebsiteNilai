@extends('layout.v_template')
@section('title','Edit data')
@section('content')
<form action="/update/{{$siswa->nim}}" method="post" enctype="multipart/form-data">
    
    @csrf

    <div class="content">
        <div class="rows">
            <div class="col-6">

                <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nim" class="form-control" value="{{$siswa->nim}}" readonly>
                    <div class="text-danger">
                        @error('nim')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Id matakuliah</label>
                    <input type="text" name="id_matakuliah" class="form-control" value="{{$siswa->id_matakuliah}}" readonly>
                    <div class="text-danger">
                        @error('id_matakuliah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Id nilai</label>
                    <input type="text" name="id_matakuliah" class="form-control" value="{{$siswa->id_nilai}}" readonly>
                    <div class="text-danger">
                        @error('id_nilai')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$siswa->nama}}" >
                    <div class="text-danger">
                        @error('nama')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Program studi</label>
                    <input type="text" name="program_studi" class="form-control" value="{{$siswa->program_studi}}">
                    <div class="text-danger">
                        @error('program_studi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" value="{{$siswa->no_hp}}">
                    <div class="text-danger">
                        @error('no_hp')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>

            </div> 
        </div>
    </div>


</form>
@endsection
