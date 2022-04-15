<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index(){
        return view('index');
    }

    public function addTask(){
        return view('index');
    }

    public function saveTask(){
        return view('index');
    }

    public function deleteTask(){
        return view('index');
    }

    public function editTask(){
        return view('index');
    }
}
