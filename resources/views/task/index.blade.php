@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Senarai Task <a class="btn btn-sm btn-primary float-end" href="/task/create">New Task</a></div>

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
                            <td></td>
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

