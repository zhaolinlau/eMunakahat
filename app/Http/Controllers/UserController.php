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
			'ic' => 'required|unique:users,ic,|digits:12|numeric',
			'staff_id' => 'required|unique:users,staff_id,|string',
			'name' => 'required|string',
			'email' => 'required|email|unique:users,email,|string',
			'contact' => 'required|digits_between:10,15,numeric',
			'gender' => 'required|in:male,female',
			'password' => 'required|min:8|string|confirmed',
		]);

		$staff = new User();
		$staff->staff_id = $request->staff_id;
		$staff->ic = $request->staff_id;
		$staff->name = $request->name;
		$staff->email = $request->email;
		$staff->gender = $request->gender;
		$staff->contact = $request->contact;
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
			'ic' => 'required|digits:12|unique:users,ic,' . $id,
			'staff_id' => 'required|unique:users,staff_id,' . $id,
			'email' => 'required|email|unique:users,email,' . $id,
			'name' => 'required|string',
			'contact' => 'required|digits_between:10,15|numeric',
			'gender' => 'required|in:male,female',
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
