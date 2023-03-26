@extends('layouts.app')

@section('content')
    <h1>Create a New Todo</h1>

    <form action="/todo" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
    </form>
@endsection