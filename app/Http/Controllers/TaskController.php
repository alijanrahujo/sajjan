<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('status',1)->get();
        $tasks = Task::where(['status'=>1])->get();
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        // echo $request->title;

        // $request->validate([
        //     'title' => 'required|min:4',
        //     'descrition' => 'nullable|min:10'
        // ]);


        $request->validate([
            'title' => 'required|min:4',
            'descrition' => 'nullable|min:10'
        ],[
            'title.required' => 'Naam lazmi likhe',
            'title.min' => "Kam se Kam 4 alfaz lazmi hon"
        ]);


        // Task::create([
        //     'title' => $request->title,
        //     'description' => $request->description
        // ]);


        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->save();



        return redirect()->route('task.index')->with('seccess','Task successfully create');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
