@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Jumlah Task</h4>
                    <p class="card-text">{{Auth::user()->tasks->count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Jumlah Comments</h4>
                    <p class="card-text">{{Auth::user()->comments->count()}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach (Auth::user()->tasks->load('user','comments.user') as $task)
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">{{$task->title}}~{{$task->user->name}}</div>
                <div class="card-body">
                    {{$task->description}} <br>
                    <hr>
                    @forelse ($task->comments as $comment)
                        <div class="mt-2">
                            <strong>{{$comment->user->name}}</strong> <br>
                            {{$comment->comment}}- {{\Carbon\Carbon::parse($comment->created_at)->format('d-m-Y')}} <br>
                        </div>
                    @empty
                        <h4 class="text-muted text-center">No Comment Found!</h4>
                    @endforelse


                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
