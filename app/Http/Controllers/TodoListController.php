<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index(){
        $todos = DB::table('todo_lists')->get();
        return view('app', ['todo_lists' => $todos]);
    }

    // public function addTask(){
    //     return view('index');
    // }

    public function saveTask(Request $request){
        
        // validate the form
        $request->validate([
            'name' => 'required|max:200'
        ]);

        // store the data
        DB::table('todo_lists')->insert([
            'name' => $request->name
        ]);

        return redirect()->route('index-home')->with('status', 'Task added!');
        // return redirect()->route('pegawai.krs-index')->with('success', 'KRS Telah Ditambahkan');
    }
    
    public function updateTask(Request $request, $id){
        // validate the form
        $request->validate([
            'name' => 'required|max:200'
        ]);

        // update the data
        DB::table('todo_lists')->where('id', $id)->update([
            'name' => $request->name
        ]);
        
        // redirect
        return redirect()->route('index-home')->with('status', 'Task updated!');
    }

    public function deleteTask($id){
        // delete the todo
        DB::table('todo_lists')->where('id', $id)->delete();

        // redirect
        return redirect()->route('index-home')->with('status', 'Task removed!');
    }

    public function editTask(){
        return view('index');
    }
}
