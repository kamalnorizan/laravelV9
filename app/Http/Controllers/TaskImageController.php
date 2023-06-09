<?php

namespace App\Http\Controllers;

use App\Models\TaskImage;
use App\Http\Requests\StoreTaskImageRequest;
use App\Http\Requests\UpdateTaskImageRequest;

class TaskImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskImageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskImageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskImage  $taskImage
     * @return \Illuminate\Http\Response
     */
    public function show(TaskImage $taskImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskImage  $taskImage
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskImage $taskImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskImageRequest  $request
     * @param  \App\Models\TaskImage  $taskImage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskImageRequest $request, TaskImage $taskImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskImage  $taskImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskImage $taskImage)
    {
        //
    }
}
