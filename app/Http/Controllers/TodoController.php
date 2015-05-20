<?php
 
namespace App\Http\Controllers;
 
use App\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
 
class TodoController extends Controller{
 
 
    public function index(){
 
        $todo  = Todo::all();
 
        return response()->json($todo);
 
    }
 
    public function getTodo($id){
 
        $todo  = Todo::find($id);
 
        return response()->json($todo);
    }
 
    public function saveTodo(Request $request){
 
        $todo = Todo::create($request->all());
 
        return response()->json($todo);
 
    }
 
    public function deleteTodo($id){
        $todo  = Todo::find($id);
 
        $todo->delete();
 
        return response()->json('success');
    }
 
    public function updateTodo(Request $request,$id){
        $todo  = Todo::find($id);
 
        $todo->aktivitas = $request->input('aktivitas');
        $todo->tanggal = $request->input('tanggal');
        $todo->tempat = $request->input('tempat');
        $todo->deskripsi = $request->input('deskripsi');
        $todo->status = $request->input('status');
 
        $todo->save();
 
        return response()->json($todo);
    }
 
}
 