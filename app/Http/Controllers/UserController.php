<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DataTables;
class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        $users = User::all();
        return view('users.index',compact('users','roles','permissions'));
    }

    public function assignPermission(Request $request)
    {
        $role = Role::find($request->role);
        $permission = Permission::find($request->permission);

        if($request->status == 'true'){
            $role->givePermissionTo($permission);
        }else{
            $role->revokePermissionTo($permission);
        }
        $data['role'] = $role;
        return response()->json($data, 200);
    }

    public function getPermissions(Request $request)
    {
        $role = Role::find($request->role);
        $role->load('permissions');
        return response()->json($role, 200);
    }

    public function getRolePermissions(Request $request)
    {
        $user = User::find($request->userId);
        $roles = $user->roles;
        $permissions = $user->getDirectPermissions();

        $data['roles'] = $roles;
        $data['permissions'] = $permissions;

        return response()->json($data, 200);

    }

    public function ajaxLoadDataTable(Request $request)
    {
        $users = User::with('roles.permissions','permissions')->select('*');
        return DataTables::eloquent($users)
        ->addColumn('permissions', function(User $user){
            $userRole='';
            foreach ($user->roles as $key => $role) {
                $userRole.='<span class="badge badge-pill bg-primary text-white">'.$role->name.'</span>';
            }
            foreach ($user->permissions as $key => $permission) {
                $userRole.='<span class="badge badge-pill badge-info">'.$permission->name.'</span>';
            }
            return $userRole;
        })
        ->addColumn('actions', function(User $user){
            $buttons = '';
            $buttons .= '<button type="button" class="btn-sm btn-warning assignPermission" data-id="'.$user->id.'"  data-toggle="modal" data-target="#assignRole-Model">Assign Permission</button>';
            return $buttons;
        })
        ->rawColumns(['actions','permissions'])
        ->make(true);
    }
}
