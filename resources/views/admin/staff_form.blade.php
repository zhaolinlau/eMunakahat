@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-6">
			<form action="{{ route('admin.add_staff') }}" class="row g-3 shadow p-5 bg-white rounded-5 needs-validation"
				method="POST" novalidate>
				@csrf
				<div class="col-12">
					<h3>Staff Account Registration</h3>
				</div>

				<div class="col-6">
					<label class="form-label" for="Staff_ID">Staff ID</label>
					<input type="text" id="Staff_ID" value="{{ old('Staff_ID') }}"
						class="form-control @error('Staff_ID') is-invalid @enderror" name="Staff_ID" required>
					@error('Staff_ID')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_IC">IC Number</label>
					<input type="text" id="User_IC" value="{{ old('User_IC') }}" class="form-control @error('User_IC') is-invalid @enderror"
						name="User_IC" required>
					@error('User_IC')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_Name">Name</label>
					<input type="text" id="User_Name" value="{{ old('User_Name') }}"
						class="form-control @error('User_Name') is-invalid @enderror" name="User_Name" required>
					@error('User_Name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="User_Gender" class="form-label">Gender</label>
					<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender" required>
						<option value="" hidden selected></option>
						<option value="Male" {{ old('User_Gender')==='Male' ? 'selected' : '' }}>Male</option>
						<option value="Female" {{ old('User_Gender')==='Female' ? 'selected' : '' }}>Female</option>
					</select>
					@error('gender')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="email">Email</label>
					<input type="email" id="email" value="{{ old('email') }}"
						class="form-control @error('email') is-invalid @enderror" name="email" required>
					@error('email')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="User_Phone_Number">Contact</label>
					<input type="tel" id="User_Phone_Number" value="{{ old('User_Phone_Number') }}" class="form-control @error('User_Phone_Number') is-invalid @enderror" name="User_Phone_Number"
						required>
					@error('User_Phone_Number')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="password">Password</label>
					<input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
						minlength="8" name="password" required>
					@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="password_confirmation">Confirm Password</label>
					<input type="password" id="password_confirmation" class="form-control @error('password') is-invalid @enderror"
						minlength="8" name="password_confirmation" required>
					@error('password')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>


				<div class="col-12">
					<button type="submit" class="btn btn-primary">Create</button>
					<a class="btn btn-danger" href="{{ route('admin.staff_list') }}">Close</a>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection