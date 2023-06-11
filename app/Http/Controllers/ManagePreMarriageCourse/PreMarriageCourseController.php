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
        $courses = Course::all();
        return view ('ManagePreMarriageCourse.staff.CourseLocationList', compact('courses'));
    }

    public function viewInfoList($courseId){
        $course = Course::findOrFail($courseId);
        return view ('ManagePreMarriageCourse.staff.CourseInfoList', compact('course'));
    }

    public function updateLocation(Request $request, $courseId){
        $request->validate([
            'PAID' => 'required',
            'Daerah' => 'required',
            'TarikhMula' => 'required',
            'MasaDari' => 'required',
            'PegawaiBertugas' => 'required',
            'NoTelPegawai' => 'required',
            'TarikhTamat' => 'required',
            'MasaHingga' => 'required',
            'Kapasiti' => 'required',
            'PaparUmum' => 'required',
			'Tempat' => 'required',
			'Alamat' => 'required',
			'Daerah' => 'required',
			'NoTelefon' => 'required',
		]);

		$course = Course::findOrFail($courseId);

		$course->update();

		return redirect()->route('staff.LocationList');
    }

    public function viewApplicantList(){
        return view ('ManagePreMarriageCourse.staff.CourseApplicantList');
    }

    public function viewApplicantAttendance(){
        return view ('ManagePreMarriageCourse.staff.CourseApplicantAttendance');
    }
    
    public function addCourse(Request $request){
        $request->validate([
			'Tempat' => 'required|string',
			'Alamat' => 'required|string',
			'Daerah' => 'required|string',
			'NoTelefon' => 'required|string',
		]);

		$course = new Course();
		$course->Course_Venue = $request->Tempat;
		$course->Course_Address = $request->Alamat;
		$course->Course_District = $request->Daerah;
		$course->Course_StaffNo = $request->NoTelefon;
		$course->save();
		return redirect()->route('staff.LocationList');
    }
}
