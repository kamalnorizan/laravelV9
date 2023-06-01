@extends('layouts.app')

@section('head')
{{-- <link rel="stylesheet" href="{{ asset('res/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('res/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
<link rel="stylesheet" href="{{ asset('res/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}"> --}}

<link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
<style>
    .btn-primary{
        background-color: blue;
    }

    .dataTable {
        width: 100% !important;
    }

    .dataTables_wrapper .row > div {
        flex-direction: column;
    }
</style>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{route('task.index')}}">Task</a></li>
@endsection

@section('actions')
<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#task-modal">New Task</button>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Senarai Task </div>
                {{-- <div class="card-header">Senarai Task <a class="btn btn-sm btn-primary float-end" href="/task/create">New Task</a></div> --}}

                <div class="card-body">
                    <button class="btn btn-primary refreshBtn" type="button">Refresh</button>
                   <table class="table" id="my-table">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Age</td>
                            <td>Action(s)</td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="task-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="taskTitle">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form id="taskForm">
                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} form-group-default ">
                        {!! Form::label('title', 'Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    </div>
                    @include('task._form')
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-closeTask"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btn-saveTask" type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')


<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
<script>
    $(document).ready(function () {

        var myTable = $('#my-table').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax":{
              "url": "{{ route('task.ajaxLoadTasks') }}",
              "dataType": "json",
              "type": 'post',
              "data":{ _token: "{{csrf_token()}}"}
            },
            "columns": [
                {data: 'thetitle', name: 'title'},
                {data: 'author', name: 'author'},
                {data: 'age', name: 'age'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('.refreshBtn').click(function (e) {
            e.preventDefault();
            myTable.ajax.reload();
        });

        $('#btn-saveTask').click(function (e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: "{{route('task.store')}}",
                data: {
                    _token: '{{ csrf_token() }}',
                    title: $('#title').val(),
                    description: $('#description').val()
                },
                dataType: "json",
                success: function (response) {
                    swal("New Task Created Successfully",{
                        icon:'success',
                        buttons: {
                            cancel: {
                                text: "OK",
                                value: null,
                                visible: true,
                                className: "",
                                closeModal: true,
                            }
                        }
                    }).then(()=>{
                        myTable.ajax.reload();
                        $('#task-modal').modal('hide');

                    });
                }
            });
        });

        $(document).on("click",".editBtn",function (e) {
            var id = $(this).attr('data-id');

            $.ajax({
                type: "post",
                url: "{{route('task.ajaxLoadTask')}}",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                dataType: "json",
                success: function (response) {
                    $('#title').val(response.title);
                    $('#taskTitle').text('Update task')
                    $('#description').val(response.description);
                    $('#task-modal').modal('show');
                }
            });

        });
    });

    $('#task-modal').on('hide.bs.modal', function (event) {
        $('#taskTitle').text('New task');
        $('#taskForm')[0].reset();
    });

</script>
@endsection
