@extends('todo.index')


@section('content')
@if (Auth::user())
<div class="container">
    {{dd(Auth::user())}}
    <div class="row ">
       @foreach ($todos as $todo)
       <div class="shadow p-3">
        <div class="col-3"><h1>Title: {{$todo->title}}</h1></div>
    
        <div class="col-3">
 <a href=""><button class="btn btn-danger">Delete</button></a>
         
     <a href=""> <button class="btn btn-success">Edit</button></a>
   
      <a href=""><button>View</button></a>
    
        
        </div>
               </div>
       @endforeach

    </div>
</div> 
@else
   <div>You are not currently logged in</div> 
   <a href="/login">login</a>
@endif
@endsection