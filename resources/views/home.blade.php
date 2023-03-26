@extends('master')

@section('konten')
  <h4>Welcome <i>{{Auth::user()->role}}</i>, <b>{{Auth::user()->username}}</b>.</h4>

  <h1>Todo List</h1>
    @if(isset($todos) && count($todos) > 0)
      <ul>
          @foreach ($todos as $todo)
              <li>
                  <h3>{{ $todo->title }}</h3>
                  <p>{{ $todo->description }}</p>
                  <form action="/todo/{{ $todo->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Delete</button>
                  </form>
                  <a href="/todo/{{ $todo->id }}/edit">Edit</a>
              </li>
          @endforeach
      </ul>
      @else
      <p>No todos found.</p>
    @endif
    <hr>

    <h2>Create a New Todo</h2>

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