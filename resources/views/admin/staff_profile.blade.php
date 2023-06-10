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
					<label class="form-label" for="staff_id">Staff ID</label>
					<input type="text" id="staff_id" class="form-control @error('staff_id') is-invalid @enderror" name="staff_id"
						value="{{ old('staff_id', $staff->staff_id) }}" required>
					@error('staff_id')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="staff_id">IC Number</label>
					<input type="text" id="ic" class="form-control @error('ic') is-invalid @enderror" name="ic"
						value="{{ old('ic', $staff->ic) }}" required>
					@error('ic')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="username">Username</label>
					<input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username"
						value="{{ old('username', $staff->username) }}" required>
					@error('username')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="gender" class="form-label">Gender</label>
					<select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" required>
						<option value="male" {{ old('gender', $staff->gender == 'male' ? 'selected' : '') }}>Male</option>
						<option value="female" {{ old('gender', $staff->gender == 'female' ? 'selected' : '') }}>Female</option>
					</select>
					@error('gender')
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
					<label class="form-label" for="contact">Contact</label>
					<input type="tel" id="contact" class="form-control @error('contact') is-invalid @enderror" name="contact"
						value="{{ old('contact', $staff->contact) }}" required>
					@error('contact')
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