<?php
//name smpace mean location of the controller

namespace App\Http\Controllers;

//controoler class importing

use App\Http\Controllers\Controller;

class StudentController extends Controller{


    function create () {
        return view('student.create');
    }
    function edit () {
        return view('student.edit');

    }function store(Request $request){
        $input = $request::all();
        \App\Student::create($input);
        return "Success";


    }
}

?>
