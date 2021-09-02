@extends('layout.v_template')
@section('title','Halaman Nilai Siswa')
@section('content')

<table class="table table-bordered">

    <thead>
        <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Matkul</th>
        <th>Nilai angka</th>
        <th>Nilai huruf</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1;?>
        @foreach ($nilai as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data ->nim}}</td>
                <td>{{$data ->matkul}}</td>
                <td>{{$data ->nilai_angka}}</td>
                <td>{{$data ->nilai_huruf}}</td>
                <td>
                    <a href="/ganti/{{$data->id_nilai}}" class="btn btn-sm btn-success">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_nilai }}">
                        Delete
                    </button>
                </td>
            </tr>    
        @endforeach()
    </tbody>
   </table>

   @foreach($nilai as $data)
       
   <div class="modal fade" id="delete{{$data->id_nilai}}">
    <div class="modal-dialog">
      <div class="modal-content bg-danger">
        <div class="modal-header">
          <h4 class="modal-title">{{$data->matkul}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Apakah yakin menghapus data ini?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
          <a href="/siswa/delete/{{$data->id_nilai}}" type="button" class="btn btn-outline-light">YA</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach()

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
			integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
			crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
			crossorigin="anonymous"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="{{asset('template')}}/main.js"></script>

@endsection

   