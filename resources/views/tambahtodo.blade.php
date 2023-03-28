@extends('master')

@section('konten')
<h3>Form Input Santri</h3>
<form method="post" action="{{route('simpantodo')}}">
  @csrf
  <div class="form-group">
    <label>What's your plan?</label>
    <input type="text" name="nm_todo" class="form-control" placeholder="I'm planning to..." required="">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" name="desc_todo" class="form-control" placeholder="My plan must finish before..." required="">
  </div>
  <div class="form-group text-right">
    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Data</button>
  </div>
</form>
@endsection