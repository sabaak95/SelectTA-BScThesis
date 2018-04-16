<?php

namespace App\Http\Controllers;

use App\Course;
use App\Req;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function makeOfferForm(Req $req)
    {
        $req->load('course');
        return view('pages.makeOffer', ['req' => $req]);
    }

    public function sendOffer()
    {

    }

    public function panelShow()
    {
        return view('pages.studentPanel');
    }

    public function requestsReceived()
    {
        $reqs = Req::with('course')->get();
        foreach ($reqs as $key => $req)
            $reqs[$key]['pre_skills'] = json_decode($req['pre_skills']);
        //   dd($reqs->toArray());
        return view('pages.requestsReceived', ['reqs' => $reqs]);
    }

}
