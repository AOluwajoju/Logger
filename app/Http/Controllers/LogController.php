<?php

namespace App\Http\Controllers;
use App\Models\Log;
use App\Http\Resources\LogResource;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){
        return LogResource::collection(Log::all());
    }
    
    public function store(Request $request){
        $request->user()->logs()->create([
            'body' => $request->body
        ]);

        return response([
            'message' => 'log created!'
        ]);
    }

}
