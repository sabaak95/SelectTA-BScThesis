<?php

namespace App\Http\Controllers;

use App\Course;
use App\Req;
use Illuminate\Http\Request;

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

        //dd($pre_courses);
        //dd($skills);
        $data = [
            'min_grade' => $min,
            'pre_skills' => $skills,
            'pre_courses' => $courses,
            'course_id' => $id,
        ];
        Req::create($data);
        return redirect('/');
        //age error dasht bege che moshkeli dare
        //age nadasht am ke ye msg neshun bede ke sakhte shod request o folan
    }

    public function panelShow(){
        return view ('pages.professorPanel');
    }
    public function offersReceived(){
        return view ('pages.offersReceived');
    }
    public function wait(){
        return view ('pages.wait');
    }
}
