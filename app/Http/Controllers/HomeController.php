<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::orderBy('id')->get()->count();
        
        // log activity
        activity()
         ->log('Akses Menu Home');

        return view('e-back-end.home.home', compact('user'));
    }

    /**
     * Show the application documentation.
     *
     * @return \Illuminate\Http\Response
     */
    public function help()
    {        
        return view('e-back-end.home.help');
    }

    /**
     * Show the application documentation.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {        
        return view('e-back-end.home.about');
    }
}
