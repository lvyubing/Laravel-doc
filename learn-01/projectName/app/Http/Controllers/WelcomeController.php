<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class WelcomeController extends Controller
{
    public function index()
    {
        return view("welcome/index");
    }
    public function store(){
    	$task = New Task:
    	$task->title = Input::get("title");
    	$task->description = Input::get("description");
    	$task->save();
    	return redirect('task');

    }
}
