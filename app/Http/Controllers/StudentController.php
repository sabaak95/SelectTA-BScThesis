<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function makeOfferForm()
    {
        return view('pages.makeOffer');
    }

    public function sendOffer(){

    }

    public function panelShow(){
        return view ('pages.panel');
    }
    public function offersReceived(){
        return view ('pages.requestsReceived');
    }
}
