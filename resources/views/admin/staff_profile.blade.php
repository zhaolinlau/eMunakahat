@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row d-flex justify-content-center">

		<div class="col-6">
			<form action="{{ route('admin.update_staff', $staff->id) }}"
				class="row p-5 g-3 bg-white shadow rounded-5 needs-validation" method="POST" novalidate>
				@csrf
				@method('PUT')
				<div class="col-12">
					<h3>Staff Profile</h3>
				</div>
				<div class="col-6">
					<label class="form-label" for="Staff_ID">Staff ID</label>
					<input type="text" id="Staff_ID" class="form-control @error('Staff_ID') is-invalid @enderror" name="Staff_ID"
						value="{{ old('Staff_ID', $staff->Staff_ID) }}" required>
					@error('Staff_ID')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_IC">IC Number</label>
					<input type="text" id="User_IC" class="form-control @error('User_IC') is-invalid @enderror" name="User_IC"
						value="{{ old('User_IC', $staff->User_IC) }}" required>
					@error('User_IC')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_Name">Username</label>
					<input type="text" id="User_Name" class="form-control @error('User_Name') is-invalid @enderror" name="User_Name"
						value="{{ old('User_Name', $staff->User_Name) }}" required>
					@error('User_Name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="User_Gender" class="form-label">Gender</label>
					<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender" required>
						<option value="Male" {{ old('User_Gender', $staff->User_Gender == 'Male' ? 'selected' : '') }}>Male</option>
						<option value="Female" {{ old('User_Gender', $staff->User_Gender == 'Female' ? 'selected' : '') }}>Female</option>
					</select>
					@error('User_Gender')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="email">Email</label>
					<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
						value="{{ old('email', $staff->email) }}" required>
					@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_Phone_Number">Phone Number</label>
					<input type="tel" id="User_Phone_Number" class="form-control @error('User_Phone_Number') is-invalid @enderror" name="User_Phone_Number"
						value="{{ old('User_Phone_Number', $staff->User_Phone_Number) }}" required>
					@error('User_Phone_Number')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="password">New Password</label>
					<input type="password" id="password" name="password"
						class="form-control @error('password') is-invalid @enderror">
					@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="password_confirmation">Confirm New Password</label>
					<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
				</div>

				<div class="col-12">
					<button type="submit" class="btn btn-primary" onclick="return confirm('Confirm to update?')">Update</button>
					<a class="btn btn-danger" href="{{ route('admin.staff_list') }}">Cancel</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection