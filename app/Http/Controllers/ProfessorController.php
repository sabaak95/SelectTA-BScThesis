<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    //
    public function makeRequestForm()
    {
        return view('pages.makeRequest');
    }

    public function sendRequest(){

    }

    public function panelShow(){
        return view ('pages.panel');
    }
    public function offersReceived(){
        return view ('pages.offersReceived');
    }
}
