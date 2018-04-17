<?php

namespace App\Http\Controllers;

use App\Course;
use App\Req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessorController extends Controller
{
    //
    public function makeRequestForm()
    {
        $courses = Course::all();
        return view('pages.makeRequest',['courses'=>$courses]);
    }

    public function sendRequest(Request $request){
        $skills = json_encode($request->get('skill'));
        $id= $request->get('course_name');
        $courses = json_encode($request->get('p_courses'));
        $min= $request->get('min_grade');
        $us = Auth::user();
        $user_id= $us['id'];


        //dd($pre_courses);
        //dd($skills);
        $data = [
            'min_grade' => $min,
            'pre_skills' => $skills,
            'pre_courses' => $courses,
            'course_id' => $id,
            'user_id' => $user_id,
        ];
        Req::create($data);
        return redirect('/');
        //age error dasht bege che moshkeli dare
        //age nadasht am ke ye msg neshun bede ke sakhte shod request o folan
    }

    public function panelShow(){
        return view ('pages.professorPanel');
    }
    public function offersReceived(Req $req){
        $req->load(['offer','offer.user']);
        $req =
        dd($req->toArray());
      //  return view ('pages.offersReceived',['req' => $req ]);
    }
    public function wait(){
        return view ('pages.wait');
    }
    public function requestsSent(){
        $user = Auth::user();
        $user_id= $user['id'];
        $reqs = Req::where('user_id', '=', $user_id)->with('course')->get();
        return view ('pages.requestsSent',['reqs' => $reqs]);
    }
}
