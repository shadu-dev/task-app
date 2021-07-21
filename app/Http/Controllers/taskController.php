<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class taskController extends Controller
{
    public function index(){
        return view('tasks');
    }

    public function search(Request $request){
        if(!empty($request->search)){
            return Task::where('name', 'like', $request->search.'%')->get();
        }
    }
}
