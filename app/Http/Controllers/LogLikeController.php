<?php

namespace App\Http\Controllers; 

use App\Models\Log;
use Illuminate\Http\Request;

class LogLikeController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    
    public function store(Log $log, Request $request)
    {

        if ($log->likedBy($request->user())){
            return response(null, 409);
        }       


        $log->likes()->create([
            'user_id'=>$request->user()->id,
        ]);
        
        return back();
    }

    public function destroy(Log $log, Request $request)
    {
        $request->user()->likes()->where('log_id', $log->id)->delete();
        
        return back();
    }
}
