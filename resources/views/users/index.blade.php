@extends('layouts.app')

@section('head')
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
                        <td>
                            @foreach ($role->permissions as $permission)
                                <span class="badge badge-primary">{{$permission->name}}</span>
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
                content
            </div>
        </div>
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
                    @foreach ($permissions as $permission)
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="checkbox{{ $errors->has('permission') ? ' has-error' : '' }} form-group-default ">
                                <label for="permission">
                                    {!! Form::checkbox('permission', $permission->id, null, ['id' => 'permission_'.$permission->id]) !!} {{strtoupper($permission->name)}}
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
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection

