@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Verify Your Email Address') }}</div>

				<div class="card-body">
					@if (session('resent'))
					<div class="alert alert-success" role="alert">
						{{ __('Pautan pengesahan baharu telah dihantar ke emel anda.') }}
					</div>
					@endif

					{{ __('Sebelum meneruskan, sila semak emel anda untuk mendapatkan pautan pengesahan.') }}
					{{ __('Jika anda tidak menerima e-mel tersebut') }},
					<form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
						@csrf
						<button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta yang lain')
							}}</button>.
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection