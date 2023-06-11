@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row d-flex justify-content-center">

			<div class="col-6 py-5">
				<form action="{{ route('staff.update_user', $user->id) }}"
					class="row p-5 g-3 bg-secondary shadow rounded-5 needs-validation" method="POST" novalidate>
					@csrf
					@method('PUT')
					<div class="col-12">
						<h3>Profil Pengguna</h3>
					</div>

					<div class="col-6">
						<label class="form-label" for="User_IC">Nombor Kad Pengenalan</label>
						<input type="text" id="User_IC" class="form-control @error('User_IC') is-invalid @enderror" name="User_IC"
							value="{{ old('User_IC', $user->User_IC) }}" required>
						@error('User_IC')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Name">Nama Penuh</label>
						<input type="text" id="User_Name" class="form-control @error('User_Name') is-invalid @enderror" name="User_Name"
							value="{{ old('User_Name', $user->User_Name) }}" required>
						@error('User_Name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="User_Gender" class="form-label">Jantina</label>
						<select id="User_Gender" class="form-select @error('User_Gender') is-invalid @enderror" name="User_Gender"
							required>
							<option value="Lelaki" {{ old('User_Gender', $user->User_Gender == 'Lelaki' ? 'selected' : '') }}>Lelaki</option>
							<option value="Perempuan" {{ old('User_Gender', $user->User_Gender == 'Perempuan' ? 'selected' : '') }}>Perempuan</option>
						</select>
						@error('User_Gender')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="email">Emel</label>
						<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"
							value="{{ old('email', $user->email) }}" required>
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label class="form-label" for="User_Phone_Number">Nombor Telefon</label>
						<input type="tel" id="User_Phone_Number" class="form-control @error('User_Phone_Number') is-invalid @enderror"
							name="User_Phone_Number" value="{{ old('User_Phone_Number', $user->User_Phone_Number) }}" required>
						@error('User_Phone_Number')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="password">Kata Laluan Baru</label>
						<input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
						@error('password')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>

					<div class="col-6">
						<label for="password_confirmation">Sahkan Kata Laluan Baru</label>
						<input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
					</div>

					<div class="col-12">
						<button type="submit" class="btn btn-primary">Kemaskini</button>
						<a class="btn btn-danger" href="{{ route('staff.user_list') }}">Batal</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
		document.getElementById('user_list').classList.add('active');
	</script>
@endsection
