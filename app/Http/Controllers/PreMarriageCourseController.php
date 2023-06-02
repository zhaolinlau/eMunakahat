<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreMarriageCourseController extends Controller
{
    //
    public function indexCourse(){
        return view ('ManagePreMarriageCourse.TermsCondition');
    }
}
