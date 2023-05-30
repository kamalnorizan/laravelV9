<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tutorial()
    {
        // $tasks = Task::where('id',10)->get();
        // $tasks = Task::where('id','<',10)->get();
        // $tasks = Task::whereIn('id',[1,3,5,7,9])->get();
        // $tasks = Task::whereNotNull('title')->get();
        // $tasks = Task::where('id','<',10)->where(function($q){
        //     $q->where('title','like','%Explicabo%')->orWhere('title','like','%dolorem %');
        // })->get();
        // $tasks = Task::where('id','<',10)->where('title','like','%Explicabo%')->orWhere('title','like','%dolorem %')->get();
        // $tasks = Task::whereBetween('id',[1,20])->get();
        // $tasks = Task::whereYear('created_at','2022')->get();

        // foreach ($tasks as $key => $task_) {
        //     echo  $task_->id.' | '.$task_->title.'<br>';
        // }

        // // echo $tasks->first()->title;

        // $task = Task::where('id',7)->first();

        // echo $task->title;

        //relationship
        // $tasks = Task::with('comments.user','user')->where('id','<',100)->get();
        //  foreach ($tasks as $key => $task_) {
        //     if($task_->comments->first()){
        //         echo  $task_->id.' | '.$task_->comments->first()->comment.'~'.$task_->comments->first()->user->name.'<br>';
        //     }
        // }

        // echo $tasks->comments;
    }

    public function index()
    {
        $tasks = Task::latest()->paginate(15);
        return view('task.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->user_id = Auth::user()->id;
        $task->save();

        flash('New task successfully created!')->success()->important();
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        dd($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
