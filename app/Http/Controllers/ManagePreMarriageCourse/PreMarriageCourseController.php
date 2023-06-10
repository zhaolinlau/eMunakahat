<?php

namespace App\Http\Controllers\ManagePreMarriageCourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class PreMarriageCourseController extends Controller
{
    public function indexCourse(){
        return view ('ManagePreMarriageCourse.user.TermsCondition');
    }

    public function indexOrganization(){
        $courses = Course::all();
        return view ('ManagePreMarriageCourse.user.OrganizationList', compact('courses'));
    }

    public function indexViewOrganization(){
        return view ('ManagePreMarriageCourse.user.OrganizationView');
    }

    public function indexCourseStatus(){
        return view ('ManagePreMarriageCourse.user.CourseStatus');
    }

    public function indexCourseForm(){
        return view ('ManagePreMarriageCourse.user.CourseForm');
    }

    public function viewLocationList(){
        return view ('ManagePreMarriageCourse.staff.CourseLocationList');
    }

    public function viewInfoList(){
        return view ('ManagePreMarriageCourse.staff.CourseInfoList');
    }

    public function viewApplicantList(){
        return view ('ManagePreMarriageCourse.staff.CourseApplicantList');
    }

    public function viewApplicantAttendance(){
        return view ('ManagePreMarriageCourse.staff.CourseApplicantAttendance');
    }
    
}
