@extends('layout.v_template')
@section('title','Tambah data')
@section('content')
    

<form action="/siswa/insert" method="post" enctype="multipart/form-data">
    
    @csrf

    <div class="content">
        <div class="rows">
            <div class="col-6">

                <div class="form-group">
                    <label>Nim</label>
                    <input type="text" name="nim" class="form-control" value="{{old('nim')}}">
                    <div class="text-danger">
                        @error('nim')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{old('nama')}}" >
                    <div class="text-danger">
                        @error('nama')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Program Studi</label>
                    <input type="text" name="program_studi" class="form-control" value="{{old('program_studi')}}">
                    <div class="text-danger">
                        @error('program_studi')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>No Handphone</label>
                    <input type="text" name="no_hp" class="form-control" value="{{old('no_hp')}}">
                    <div class="text-danger">
                        @error('no_hp')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Id matakuliah yang di ikuti</label>
                    <input type="text" name="id_matakuliah" class="form-control" value="{{old('id_matakuliah')}}">
                    <div class="text-danger">
                        @error('id_matakuliah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Id nilai</label>
                    <input type="text" name="id_nilai" class="form-control" value="{{old('id_nilai')}}">
                    <div class="text-danger">
                        @error('id_nilai')
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
