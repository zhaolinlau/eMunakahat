<?php

namespace App\Http\Controllers\ManagePreMarriageCourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreMarriageCourseController extends Controller
{
    public function indexRegister(){
        return view ('ManageMarriageRegisteration.MarriageRegisterationForm');
    }
}
