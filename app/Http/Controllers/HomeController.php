<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user['user_type'] == '0'){
            return view ('pages.professorPanel');
        }
        else{
            return view ('pages.studentPanel');
        }
    }
}
