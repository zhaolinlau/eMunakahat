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
					<label class="form-label" for="staff_id">Staff ID</label>
					<input type="text" id="staff_id" value="{{ old('staff_id') }}"
						class="form-control @error('staff_id') is-invalid @enderror" name="staff_id" required>
					@error('staff_id')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="ic">IC Number</label>
					<input type="text" id="ic" value="{{ old('ic') }}" class="form-control @error('ic') is-invalid @enderror"
						name="ic" required>
					@error('ic')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label class="form-label" for="name">Name</label>
					<input type="text" id="name" value="{{ old('name') }}"
						class="form-control @error('name') is-invalid @enderror" name="name" required>
					@error('name')
					<div class="invalid-feedback">
						{{ $message }}
					</div>
					@enderror
				</div>

				<div class="col-6">
					<label for="gender" class="form-label">Gender</label>
					<select id="gender" class="form-select @error('gender') is-invalid @enderror" name="gender" required>
						<option value="" hidden selected></option>
						<option value="male" {{ old('gender')==='male' ? 'selected' : '' }}>Male</option>
						<option value="female" {{ old('gender')==='female' ? 'selected' : '' }}>Female</option>
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
					<label class="form-label" for="contact">Contact</label>
					<input type="tel" id="contact" value="{{ old('contact') }}" class="form-control @error('contact') is-invalid @enderror" name="contact"
						required>
					@error('contact')
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