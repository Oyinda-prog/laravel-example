<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function index(){
        // $alltodo=Todo::all();
        $alltodo=Todo::where('id',Auth::user()->id)->get();
       return view('todo.displaytodo',[
        'todos'=>$alltodo
       ]); 
    }
    public function create(){
        return view('todo.createtodo'); 
     }
     public function storage(Request $req){
        
       $todo=new Todo;
       $todo->title=$req->title;
       $todo->content=$req->content;
       $todo->id=Auth::user()->id;
       $todo->save();
        return redirect('/todo'); 
     }
}
