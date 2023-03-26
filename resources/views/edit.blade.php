@extends('layouts.app')

@section('content')
    <h1>Edit Todo</h1>

    <form action="/todo/{{ $todo->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $todo->title }}">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ $todo->description }}</textarea>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection
