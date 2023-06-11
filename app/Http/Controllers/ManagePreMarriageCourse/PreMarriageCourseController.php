<?php

namespace App\Http\Controllers\ManagePreMarriageCourse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class PreMarriageCourseController extends Controller
{
	public function indexCourse() // view the page of the terms and condition
	{
		return view('ManagePreMarriageCourse.user.TermsCondition');
	}

	public function indexOrganization() // view the list  of the organization
	{
		$courses = Course::all();
		return view('ManagePreMarriageCourse.user.OrganizationList', compact('courses'));
	}

	public function indexViewOrganization($courseId) //display the details of the organization
	{
		$course = Course::findOrFail($courseId);
		return view('ManagePreMarriageCourse.user.OrganizationView', compact('course'));
	}

	public function indexCourseStatus() //To display the applicant' course status
	{
		return view('ManagePreMarriageCourse.user.CourseStatus');
	}

	public function indexCourseForm() // to display the premarriage course register form
	{
		return view('ManagePreMarriageCourse.user.CourseForm');
	}

	public function viewLocationList()
	{
		$courses = Course::orderBy('Course_ID', 'desc')->get();
		return view('ManagePreMarriageCourse.staff.CourseLocationList', compact('courses'));
	}

	public function viewInfoList($courseId)
	{
		$course = Course::findOrFail($courseId);
		return view('ManagePreMarriageCourse.staff.CourseInfoList', compact('course'));
	}

	public function updateLocation(Request $request, $courseId)
	{
		$request->validate([
			'Course_Organization' => 'required',
			'Course_District' => 'required',
			'Course_TimeStart' => 'required',
			'Course_TimeEnd' => 'required',
			'Course_Staff' => 'required',
			'Course_StaffNo' => 'required',
			'Course_DateStart' => 'required',
			'Course_DateEnd' => 'required',
			'Course_Capacity' => 'required|integer',
			'Course_Public' => 'required',
			'Course_Venue' => 'required',
			'Course_Address' => 'required',
		]);

		$course = Course::findOrFail($courseId);

		$course->update($request->all());

		return redirect()->route('staff.LocationList')->with('updated', 'Anda telah berjaya kemaskini kursus!');
	}

	public function deleteCourse($courseId)
	{
		$course = Course::findOrFail($courseId);
		$course->delete();
		return redirect()->route('staff.LocationList')->with('deleted', 'Anda telah berjaya padam kursus!');
	}

	public function viewApplicantList()
	{
		return view('ManagePreMarriageCourse.staff.CourseApplicantList');
	}

	public function viewApplicantAttendance()
	{
		return view('ManagePreMarriageCourse.staff.CourseApplicantAttendance');
	}

	public function addCourse(Request $request)
	{
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
		return redirect()->route('staff.LocationList')->with('created', 'Anda telah berjaya tambah kursus!');
	}
}
