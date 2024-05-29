<?php

namespace App\Http\Controllers;

use App\Models\task;
use App\Models\Task2;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ['martin','joshep','Tim'];
        $parking = ["home","office","no where"];

        return view('task',compact('data','parking'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
       $data = Task::create($request->all());
       return back();
    }

    public function task2(Request $request)
    {
        $type = ['text','date','select'];
        $options = ["home","office","no where"];
        return view('task2',compact('type','options'));

    }

    public function view2(Request $request)
    {
        $data =Task2::all();
        $options=[];
        foreach( $data as $item){
            if($item->options !=NULL){
            $options = explode(',', $item->options);
        }
        }
               return view('taskview',compact('data','options'));

    }

    public function store2(Request $request)
    {

        $request->validate([
            'title'=>'required|string',
            'type'=>'required|string',
        ]);
       $data = Task2::create($request->all());
       return back();
    }

    /**
     * Display the specified resource.
     */
    public function destroy2($id)
    {
        $data = Task2::findOrFail($id);
        $data->delete();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
