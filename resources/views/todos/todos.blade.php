@extends('todos/index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto shadow">
                <a href="/addtodo">
                    <button class="btn btn-info w-25">Add Todo</button>
                </a>
                <h1 class="display-6 text-center text-muted">
                   Todo List
                </h1>
            </div>
        </div>
    </div>
@endsection