@extends('todos.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto shadow">
                <a href="/todos">
                    <button class="btn btn-info w-25">View Todo</button>
                </a>
                <form action="/todos/edit/{{ $todo->todo_id }}" method="POST">
                    @csrf
                    <h1 class="display-6 text-center text-muted">
                        EDIT TODO
                    </h1>
                    <input type="text" class="form-control mb-3" placeholder="Todo Name" name="todo_name" value="{{ $todo->todo_name }}">
                    <input type="text" class="form-control mb-3" placeholder="Todo Description" name="todo_desc" value="{{ $todo->todo_desc }}">
                    <input type="submit" class="btn btn-outline-success w-100 mb-3" value="Edit Todo">
                </form>

            </div>
        </div>

    </div>
    
@endsection