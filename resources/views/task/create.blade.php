@extends('layouts.app')

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('task.index')}}">Task</a></li>
<li class="breadcrumb-item active">New Task</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">New Task</div>
                <div class="card-body">
                   {!! Form::open(['method' => 'POST', 'route' => 'task.store']) !!}
                       <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                           {!! Form::label('title', 'Title') !!}
                           {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                           <small class="text-danger">{{ $errors->first('title') }}</small>
                       </div>
                       <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                           {!! Form::label('description', 'Description') !!}
                           {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
                           <small class="text-danger">{{ $errors->first('description') }}</small>
                       </div>

                       <div class="btn-group float-end">
                           {!! Form::submit("Add", ['class' => 'btn btn-primary']) !!}
                       </div>

                   {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

