<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	public function readStaff()
	{
		$staff = User::where('role', 1)->orderBy('id', 'desc')->get();
		return view('admin.staff_list', compact('staff'));
	}

	public function staffForm()
	{
		return view('admin.staff_form');
	}

	public function createStaff(Request $request)
	{
		$request->validate([
			'User_IC' => 'required|unique:users,User_IC,|digits:12|numeric',
			'Staff_ID' => 'required|unique:users,Staff_ID,|string',
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15,numeric',
			'User_Gender' => 'required|in:Male,Female',
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
		return redirect()->route('admin.staff_list')->with('created', 'Staff created successfully!');
	}

	public function readStaffProfile($id)
	{
		$staff = User::findOrFail($id);
		return view('admin.staff_profile', compact('staff'));
	}

	public function updateStaff(Request $request, $id)
	{
		$request->validate([
			'User_IC' => 'required|digits:12|unique:users,User_IC,' . $id,
			'Staff_ID' => 'required|unique:users,Staff_ID,' . $id,
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15|numeric',
			'User_Gender' => 'required|in:Male,Female',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'nullable|min:8|confirmed|string',
		]);

		$staff = User::findOrFail($id);

		$data = $request->except('password');

		if ($request->filled('password')) {
			$data['password'] = bcrypt($request->password);
		}

		$staff->update($data);

		return redirect()->route('admin.staff_list')->with('updated', 'Staff updated successfully!');
	}


	public function deleteStaff($id)
	{
		$staff = User::findOrFail($id);
		$staff->delete();
		return redirect()->route('admin.staff_list')->with('deleted', 'Staff deleted successfully!');
	}
}
