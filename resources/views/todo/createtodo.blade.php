@extends('todo.index')

@section('content')
<div class="container"> 
    <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h1 class="text-center  text-info">Todo App</h1>
            {{-- {{Auth::user()->id}} --}}
      <form action="/todo/create" method="post">
        @csrf
        <input type="text" name="title" class="form-control my-5" placeholder="Enter Title">
        <textarea name="content" id="" cols="100" rows="10" placeholder="write Todo ......."></textarea>
        <button type="submit" class="btn btn-primary w-100">Create Todo</button>
      </form>
        </div>
    
    </div>
    </div>   
@endsection