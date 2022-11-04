@extends('todos/index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7 mx-auto shadow">
                <a href="/addtodo">
                    <button class="btn btn-info w-25">Add Todo</button>
                </a>
                <h1 class="display-6 text-center text-muted">
                   Todo List
                </h1>
                @foreach ($todos as $todo) 
                    <div class="row shadow p-3">
                        <div class="col-4">
                            <p>{{$todo->todo_name}}</p>
                        </div>
                        <div class="col-4">
                            <p>{{$todo->todo_desc}}</p>
                        </div>
                        <div class="col-2">
                            <a href="/todos/edit/{{ $todo->todo_id }}">
                                <button class="btn btn-outline-success">Edit</button>
                            </a>
                        </div>
                        <div class="col-2">
                            <a href="/todos/{{ $todo->todo_id}}">
                                <button class="btn btn-outline-danger">Delete</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection