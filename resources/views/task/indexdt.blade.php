@extends('layouts.app')

@section('head')
{{-- <link rel="stylesheet" href="{{ asset('res/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('res/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
<link rel="stylesheet" href="{{ asset('res/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}"> --}}
<link href="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/fc-4.2.2/r-2.4.1/datatables.min.css" rel="stylesheet"/>
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
                    <button class="btn btn-primary" id="refreshBtn" type="button">Refresh</button>
                   <table class="table" id="my-table">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Author</td>
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
                <h5 class="modal-title">New Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="btn-saveTask" type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')


<script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/fc-4.2.2/r-2.4.1/datatables.min.js"></script>
<script>
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
            {data: 'title', name: 'title'},
            {data: 'user.name', name: 'user.name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#refreshBtn').click(function (e) {
        e.preventDefault();
        myTable.ajax.reload();
    });
</script>
@endsection
