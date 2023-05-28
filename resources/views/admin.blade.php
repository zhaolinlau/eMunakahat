@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col py-5">
			<div class="row">
				<div class="col-4">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Staff List</h5>
							<p class="card-text">Navigate to list of staff.</p>
							<a class="btn btn-primary" href="{{route('admin.staff_list')}}">Staff List</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection