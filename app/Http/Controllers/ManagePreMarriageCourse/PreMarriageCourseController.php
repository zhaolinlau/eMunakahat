<?php

namespace App\Http\Controllers\ManagePreMarriageCourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreMarriageCourseController extends Controller
{
    public function indexCourse(){
        return view ('ManagePreMarriageCourse.TermsCondition');
    }

    public function indexOrganization(){
        return view ('ManagePreMarriageCourse.OrganizationList');
    }

    public function indexViewOrganization(){
        return view ('ManagePreMarriageCourse.OrganizationView');
    }

    public function indexCourseStatus(){
        return view ('ManagePreMarriageCourse.CourseStatus');
    }

    public function indexCourseForm(){
        return view ('ManagePreMarriageCourse.PreMarriageCourseForm');
    }
}
