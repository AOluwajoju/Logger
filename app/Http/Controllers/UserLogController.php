<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserLogController extends Controller
{
    public function index(User $user)
    {
        
        $logs = $user->logs()->with(['user', 'likes'])->paginate(10);
        return view('users.logs.index', [
            'user' => $user,
            'logs' => $logs
        ]); 
    }
}
