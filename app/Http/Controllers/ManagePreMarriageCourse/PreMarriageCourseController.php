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

    public function indexViewOrganization($courseId){
        $course = Course::findOrFail($courseId);
        return view ('ManagePreMarriageCourse.user.OrganizationView', compact('course'));
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
    
    public function addCourse(Request $request){
        $request->validate([
			'User_IC' => 'required|unique:users,User_IC,|digits:12|numeric',
			'Staff_ID' => 'required|unique:users,Staff_ID,|string',
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15,numeric',
			'User_Gender' => 'required|in:Lelaki,Perempuan',
			'email' => 'required|email|unique:users,email,|string',
			'password' => 'required|min:8|string|confirmed',
		]);

		$staff = new User();
		$staff->Staff_ID = $request->Staff_ID;
		$staff->User_IC = $request->User_IC;
		$staff->User_Name = $request->User_Name;
		$staff->User_Gender = $request->User_Gender;
		$staff->User_Phone_Number = $request->User_Phone_Number;
		$staff->email = $request->email;
		$staff->password = bcrypt($request->password);
		$staff->role = 1;
		$staff->save();
		return redirect()->route('admin.staff_list')->with('created', 'Akaun staf berjaya didaftar!');
    }
}
