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

@endsection

@section('script')


<script src="https://cdn.datatables.net/v/bs4/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/fc-4.2.2/r-2.4.1/datatables.min.js"></script>
<script>
    $myTable = $('#my-table').DataTable({
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
</script>
@endsection
