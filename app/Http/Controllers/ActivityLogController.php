<?php

namespace App\Http\Controllers;

use DB;
use App\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $logs = ActivityLog::with('User')->orderBy('created_at', 'DESC')->get();
       
        return view('e-back-end.activity-log.index', compact('logs'));
    }
}
