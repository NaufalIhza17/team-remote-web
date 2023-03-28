@extends('master')

@section('konten')
  <h4 class="text-center">Welcome <i>{{Auth::user()->role}}</i>, <b>{{Auth::user()->username}}</b></h4>

  <a class="btn mx-auto" href="{{route('tampiltodo')}}">Start your day with positive things!</a>
@endsection