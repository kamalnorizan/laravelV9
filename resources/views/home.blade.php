@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach (Auth::user()->tasks as $task)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">{{$task->title}}</div>
                <div class="card-body">
                    {{$task->description}} <br>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
