@extends('layouts.app')

@section('head')

<link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet"/>

<style>
    .dataTable {
        width: 100% !important;
    }

    .dataTables_wrapper .row > div {
        flex-direction: column;
    }
</style>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="#">User Management</a></li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Roles
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>
                            Role
                        </td>
                        <td>
                            Permission
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                    @foreach ($roles as $role)
                    <tr>
                        <td>{{strtoupper($role->name)}}</td>
                        <td id="tdRole{{$role->id}}">
                            @foreach ($role->permissions as $permission)
                                <span class="badge bg-primary text-white">{{$permission->name}}</span>
                            @endforeach
                        </td>
                        <td>
                            <button type="button" class="btn-sm btn-warning btnAssignPermission" data-roleId="{{$role->id}}"  data-toggle="modal" data-target="#assignPermission-Modal">Assign Permission</button>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header">
                Permissions
            </div>
            <div class="card-body">
                @foreach ($permissions as $permission)
                    - {{strtoupper($permission->name)}} <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table" id="usrTable">
            <thead>
                <tr>
                    <th>
                        Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Role/Permissions
                    </th>
                    <th>
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="assignPermission-Modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Permission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <input type="hidden" name="role_id" id="role_id" class="form-control" value="">

                    @foreach ($permissions as $permission)
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox{{ $errors->has('permission') ? ' has-error' : '' }} form-group-default ">
                                <label for="permission">
                                    {!! Form::checkbox('permission', $permission->id, null, ['id' => 'permission_'.$permission->id, 'class'=>'cb_permissions']) !!} {{strtoupper($permission->name)}}
                                </label>
                            </div>
                            <small class="text-danger">{{ $errors->first('permission') }}</small>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="assignRole-Model" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Assign Role(s)/Permission(s)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="user_id" id="user_id" class="form-control" value="">

                <div class="row">
                    <div class="col-md-12"><strong>Role(s)</strong></div>
                    @foreach ($roles as $role)
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="checkbox{{ $errors->has('role') ? ' has-error' : '' }} form-group-default ">
                                    <label for="permission">
                                        {!! Form::checkbox('role', $role->id, null, ['id' => 'cbu_role_'.$role->id, 'class'=>'cbu_roles']) !!} {{strtoupper($role->name)}}
                                    </label>
                                </div>
                                <small class="text-danger">{{ $errors->first('permission') }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12"><strong>Permission(s)</strong></div>
                    @foreach ($permissions as $permission)
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="checkbox{{ $errors->has('permission') ? ' has-error' : '' }} form-group-default ">
                                    <label for="permission">
                                        {!! Form::checkbox('permission', $permission->id, null, ['id' => 'cbu_permission_'.$permission->id, 'class'=>'cbu_permissions']) !!} {{strtoupper($permission->name)}}
                                    </label>
                                </div>
                                <small class="text-danger">{{ $errors->first('permission') }}</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>
<script>
    var userTable = $('#usrTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
          "url": "{{ route('user.ajaxLoadDataTable') }}",
          "dataType": "json",
          "method": "post",
          "data":{ _token: "{{csrf_token()}}"}
        },
        "columns": [
          { "data": "name" },
          { "data": "email" },
          { "data": "permissions"},
          { "data": "actions" }
        ]
    });

    $('.cb_permissions').click(function (e) {

        var status = $(this).is(":checked");
        var permission = $(this).val();
        var role = $('#role_id').val();

        $.ajax({
            type: "post",
            url: "{{ route('user.assignPermission')}}",
            data: {
                _token: '{{ csrf_token() }}',
                status: status,
                permission: permission,
                role: role
            },
            dataType: "json",
            success: function (response) {
                $('#tdRole'+role).empty();
                $.each(response.role.permissions, function (indexInArray, valueOfElement) {
                    $('#tdRole'+role).append(
                        '<span class="badge bg-primary text-white">'+valueOfElement.name+'</span>'
                    );
                });
            }
        });

    });

    $('#assignPermission-Modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var roleId = button.data('roleid');
        $('#role_id').val(roleId);
        $.each($('.cb_permissions'), function (indexInArray, cb_permission) {
            $(cb_permission).prop('checked',false);
        });

        $.ajax({
            type: "post",
            url: "{{route('user.getPermissions')}}",
            data: {
                _token: '{{ csrf_token() }}',
                role: roleId
            },
            dataType: "json",
            success: function (response) {
                $.each(response.permissions, function (indexInArray, permission) {
                    $('#permission_'+permission.id).prop('checked',true);
                });
            }
        });
    });

    $('#assignRole-Model').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var userId = button.data('id');
        $('#user_id').val(userId);
        $.each($('.cbu_permissions'), function (indexInArray, cbu_permission) {
            $(cbu_permission).prop('checked',false);
        });

        $.each($('.cbu_roles'), function (indexInArray, cbu_role) {
            $(cbu_role).prop('checked',false);
        });

        $.ajax({
            type: "post",
            url: "{{route('user.getRolePermissions')}}",
            data: {
                _token: '{{ csrf_token() }}',
                userId: userId
            },
            dataType: "json",
            success: function (response) {
                $.each(response.roles, function (indexInArray, role) {
                    $('#cbu_role_'+role.id).prop('checked',true);
                });

                $.each(response.permissions, function (indexInArray, permission) {
                    $('#cbu_permission_'+permission.id).prop('checked',true);
                });
            }
        });
    });



</script>
@endsection

