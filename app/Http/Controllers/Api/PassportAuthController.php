<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Auth;
use Validator;
class PassportAuthController extends Controller
{
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $accessToken = auth()->user()->createToken('authToken')->accessToken;
            return response()->json(['user' => auth()->user(), 'access_token' => $accessToken]);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        if($validation->fails()){
            return response()->json(['error' => $validation->errors()], 401);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($data);
        // $accessToken = $user->createToken('authToken')->accessToken;
        return response()->json(['status' => 'success']);
    }

    public function logout()
    {
        $user = Auth::user()->token();
        $user->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function alltasks()
    {
        $tasks = Task::with('user','comments')->withCount('comments')->get();
        return response()->json(['tasks' => $tasks]);
    }

    public function mytasks()
    {
        $tasks = Task::with('user')->withCount('comments')->where('user_id',Auth::user()->id)->get();
        return response()->json(['tasks' => $tasks]);
    }

    public function task(Task $task)
    {
        $task->load('comments','user');
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => Auth::user()->id

        ];

        $task = Task::create($data);
        return response()->json(['task' => $task]);
    }

}
