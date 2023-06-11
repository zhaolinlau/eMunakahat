@extends('layouts.app')

@section('content')
<div class="container h-100">
	<div class="row justify-content-center h-100 align-items-center">
		<div class="col-md-8 py-5">
			<div class="card border-0 shadow">
				<div class="card-header bg-primary">{{ __('Tetapan Semula Kata Laluan') }}</div>

				<div class="card-body">
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif

					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="row mb-3">
							<label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Emel') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
									value="{{ old('email') }}" required autocomplete="email" autofocus>

								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Hantar Pautan Tetapan Semula Kata Laluan') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection