@extends('layouts.app')

@section('head')
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">Edit</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                {!! Form::model($task, ['route' => ['task.update', $task->id], 'method' => 'PUT']) !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {!! Form::label('title', 'Title') !!}
                    {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required','readonly']) !!}
                    <small class="text-danger">{{ $errors->first('title') }}</small>
                </div>
                    @include('task._form')
                    <div class="btn-group pull-right">
                        {!! Form::submit("Update", ['class' => 'btn btn-success']) !!}
                    </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection

