@extends('master')

@section('konten')
<h3>Tampil Todo List</h3>
<a class="btn btn-success" href="{{route('tambahtodo')}}"><i class="fa fa-plus"></i> Tambah Todo List</a>

<table class="table table-bordered table-hover">
    <tr>
        <th>ID</th>
        <th>Activity</th>
        <th>Description</th>
    </tr>
    @foreach($todo as $td) 
    <tr>
        <td>{{$td->id_todo}}</td>
        <td>{{$td->nm_todo}}</td>
        <td>{{$td->desc_todo}}</td>
      <td>
        {{-- <a href="/santri/ubah/{{$s->id_santri}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a> --}}
        <a href="/todo/hapus/{{$td->id_todo}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" class="btn btn-danger btn-sm text-center"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
@endsection