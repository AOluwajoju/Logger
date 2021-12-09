<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {

        $logs = Log::latest()->with(['user', 'likes'])->paginate(10);

        return view('logs.index', [
            'logs' => $logs
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->logs()->create([
            'body' => $request->body
        ]);

        return back();
    }

    public function destroy(Log $log)
    {

        $this->authorize('delete', $log);

        $log->delete();



        return back();
    }

}