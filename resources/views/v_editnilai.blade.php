@extends('layout.v_template')
@section('title','Edit data')
@section('content')
<form action="/update/{{$nilai->id_matakuliah}}" method="post" enctype="multipart/form-data">
    
    @csrf

    <div class="content">
        <div class="rows">
            <div class="col-6">

                <div class="form-group">
                    <label>Id nilai</label>
                    <input type="text" name="id_nilai" class="form-control" value="{{$nilai->id_nilai}}" readonly>
                    <div class="text-danger">
                        @error('id_nilai')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Id Matakuliah</label>
                    <input type="text" name="id_matakuliah" class="form-control" value="{{$nilai->id_matakuliah}}" readonly>
                    <div class="text-danger">
                        @error('id_matakuliah')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama matakuliah</label>
                    <input type="text" name="matkul" class="form-control" value="{{$nilai->matkul}}" >
                    <div class="text-danger">
                        @error('matkul')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nilai</label>
                    <input type="text" name="nilai_angka" class="form-control" value="{{$nilai->nilai_angka}}">
                    <div class="text-danger">
                        @error('nilai_angka')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nilai Huruf</label>
                    <input type="text" name="no_hp" class="form-control" value="{{$nilai->nilai_huruf}}">
                    <div class="text-danger">
                        @error('nilai_huruf')
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
