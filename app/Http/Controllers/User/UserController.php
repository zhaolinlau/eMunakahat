<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	public function readStaff()
	{
		$staffs = User::where('role', 1)->orderBy('id', 'desc')->get();
		return view('admin.staff_list', compact('staffs'));
	}

	public function readUser()
	{
		$users = User::where('role', 0)->orderBy('id', 'desc')->get();

		if (auth()->user()->role == 'admin') {
			return view('admin.user_list', compact('users'));
		} elseif (auth()->user()->role == 'staff') {
			return view('staff.user_list', compact('users'));
		}
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
		return redirect()->route('admin.staff_list')->with('created', 'Akaun staf berjaya didaftar!');
	}

	public function readStaffProfile($id)
	{
		$staff = User::findOrFail($id);
		return view('admin.staff_profile', compact('staff'));
	}

	public function readUserProfile($id)
	{
		$user = User::findOrFail($id);

		if (auth()->user()->role == 'admin') {
			return view('admin.user_profile', compact('user'));
		} elseif (auth()->user()->role == 'staff') {
			return view('staff.user_profile', compact('user'));
		}
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

		return redirect()->route('admin.staff_list')->with('updated', 'Profil staf berjaya dikemaskini!');
	}

	public function updateUser(Request $request, $id)
	{
		$request->validate([
			'User_IC' => 'required|digits:12|unique:users,User_IC,' . $id,
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15|numeric',
			'User_Gender' => 'required|in:Male,Female',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'nullable|min:8|confirmed|string',
		]);

		$user = User::findOrFail($id);

		$data = $request->except('password');

		if ($request->filled('password')) {
			$data['password'] = bcrypt($request->password);
		}

		$user->update($data);


		if (auth()->user()->role == 'admin') {
			return redirect()->route('admin.user_list')->with('updated', 'Profile pengguna berjaya dikemaskini!');
		} elseif (auth()->user()->role == 'staff') {
			return redirect()->route('staff.user_list')->with('updated', 'Profile pengguna berjaya dikemaskini!');
		}
	}

	public function deleteStaff($id)
	{
		$staff = User::findOrFail($id);
		$staff->delete();
		return redirect()->route('admin.staff_list')->with('deleted', 'Akaun staf berjaya dipadam!');
	}

	public function deleteUser($id)
	{
		$user = User::findOrFail($id);
		$user->delete();

		if (auth()->user()->role == 'admin') {
			return redirect()->route('admin.user_list')->with('deleted', 'Akaun pengguna berjaya dipadam!');
		} elseif (auth()->user()->role == 'staff') {
			return redirect()->route('staff.user_list')->with('deleted', 'Akaun pengguna berjaya dipadam!');
		}
	}

	public function user_update(Request $request, $id)
	{
		$request->validate([
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15|numeric',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'nullable|min:8|confirmed|string',
		]);

		$user = User::findOrFail($id);

		$data = $request->except('password');

		if ($request->filled('password')) {
			$data['password'] = bcrypt($request->password);
		}

		$user->update($data);

		return redirect()->route('user.home')->with('updated', 'Anda berjaya kemaskini!');
	}

	public function staff_update(Request $request, $id)
	{
		$request->validate([
			'User_Name' => 'required|string',
			'User_Phone_Number' => 'required|digits_between:10,15|numeric',
			'email' => 'required|email|unique:users,email,' . $id,
			'password' => 'nullable|min:8|confirmed|string',
		]);

		$staff = User::findOrFail($id);

		$data = $request->except('password');

		if ($request->filled('password')) {
			$data['password'] = bcrypt($request->password);
		}

		$staff->update($data);

		return redirect()->route('staff.home')->with('updated', 'Anda berjaya kemaskini!');
	}


	public function admin_update(Request $request, $id)
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

		$admin = User::findOrFail($id);

		$data = $request->except('password');

		if ($request->filled('password')) {
			$data['password'] = bcrypt($request->password);
		}

		$admin->update($data);

		return redirect()->route('admin.home')->with('updated', 'Anda berjaya kemaskini!');
	}
}
