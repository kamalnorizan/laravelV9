@extends('layouts.app')

@section('head')
<style>
    .btn-primary{
        background-color: blue;
    }
</style>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('task.index')}}">Task</a></li>
@endsection

@section('actions')
<a class="btn btn-sm btn-primary" href="{{route('task.create')}}">New Task</a>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Task </div>
                {{-- <div class="card-header">Senarai Task <a class="btn btn-sm btn-primary float-end" href="/task/create">New Task</a></div> --}}

                <div class="card-body">
                   <table class="table" id="my-table">
                    <tr>
                        <td>No</td>
                        <td>Title</td>
                        <td>Author</td>
                        <td>Action(s)</td>
                    </tr>
                    @foreach ($tasks as $key=>$task)
                        <tr>
                            <td>{{$key+1+(($tasks->currentPage()-1)*$tasks->perPage())}}</td>
                            <td>{{$task->title}}</td>
                            <td>{{$task->user->name}}</td>
                            <td><a href="{{route('task.show',['task'=> $task->id])}}" class="btn btn-sm btn-info">Show</a>
                                <a href="{{route('task.edit',['task'=> $task->id])}}" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                   </table>
                   {{$tasks->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>

</script>
@endsection
