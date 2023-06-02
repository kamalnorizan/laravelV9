<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Auth;
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


}
