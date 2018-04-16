<?php

namespace App\Http\Controllers;

use App\Course;
use App\Offer;
use App\Req;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function makeOfferForm(Req $req)
    {
        $req->load('course');
        $pre = Course::whereIn('id',json_decode($req['pre_courses']))->get();

        $req['pre_skills'] = json_decode($req['pre_skills']);
        //dd($req['pre_skills'] );
        return view('pages.makeOffer', ['req' => $req,'pre'=>$pre]);

    }

    public function sendOffer( Request $request)
    {
        $grade= $request->get('grade');
        $skills = json_encode($request->get('passed_skill'));
       $courses = json_encode($request->get('passed_pre'));

        dd($request->all());
        $data = [
            'grade' => $grade,
            'skills' => $skills,
            'passed_pre' => $courses,
        ];
      //  Offer::create($data);
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
