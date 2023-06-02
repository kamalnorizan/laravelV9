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

    public function ajaxLoadDataTable(Request $request)
    {
        $users = User::with('roles.permissions','permissions')->select('*');
        return DataTables::eloquent($users)
        ->addColumn('permissions', function(User $user){
            $role='';
            foreach ($user->roles as $key => $role) {
                $role.='<span class="badge badge-pill badge-primary">'.$role->name.'</span>';
            }
            return $role;
        })
        ->addColumn('actions', function(User $user){
            $buttons = '';
            $buttons .= '<button type="button" class="btn-sm btn-warning assignPermission" data-id="'.$user->id.'" >Assign Permission</button>';
            return $buttons;
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
