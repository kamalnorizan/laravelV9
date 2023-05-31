@extends('layouts.app')

@section('head')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('task.index')}}">Task</a></li>
<li class="breadcrumb-item active"><a href="#">{{$task->title}}</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                {{$task->title}}
            </div>
            <div class="card-body">
                {{$task->description}}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                Comments
            </div>
            <div class="card-body">
                @forelse($task->comments as $comment)
                    <strong>{{$comment->user->name}}</strong> <small>{{$comment->created_at->diffForHumans()}}</small>
                    <p>{{$comment->comment}}</p>
                    <hr>
                @empty
                    <p class="text-center">No comments yet</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection

