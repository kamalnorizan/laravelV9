<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
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
}
