@extends('master')

@section('konten')
  <h4>Welcome <i>{{Auth::user()->role}}</i>, <b>{{Auth::user()->username}}</b>.</h4>
@endsection