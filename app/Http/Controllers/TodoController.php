<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::get();
        return view('index',compact('todos'));
    }
    public function store(TodoRequest $request){
        
        $todo = new Todo();
        $todo->content = $request->content;
        $todo->save();
        return redirect()->route('index');
    }
    public function update(TestPostRequest $request, Todo $todo){
        
        $todo->content = $request->content_update;
        $todo->save();
        return redirect()->route('index');
    }
    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->route('index');
    }

}