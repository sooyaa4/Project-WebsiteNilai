@extends('layout.v_template')
@section('title','Detail Data Siswa')
@section('content')



    <div class="container">
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Nim {{$guru->nim}}</div>
            <div class="card-body">
              <p class="card-text">{{$guru->nama}} <br/> {{$guru->program_studi}} <br/> {{$guru->no_hp}} </p>
            </div>    
      </div>
        
   @endsection
   
   
   