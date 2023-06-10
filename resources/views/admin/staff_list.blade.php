@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<div class="container">
	<div class="row g-3 w-100">

		@if (session('created'))
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>{{ session('created') }}</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		@elseif (session('updated'))
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>{{ session('updated') }}</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		@elseif (session('deleted'))
		<div class="col-12">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>{{ session('deleted') }}</strong>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
		@endif



		<div class="col-12">
			<a class="btn btn-primary" href="{{ route('admin.staff_form') }}">
				Add Staff
			</a>
		</div>

		<div class="col-12 table-responsive">
			<table class="table full-width table-hover" id="staff_list">
				<thead class="table-light">
					<tr>
						<th>No</th>
						<th>Staff ID</th>
						<th>Username</th>
						<th>Email</th>
						<th>View</th>
						<th>Deletion</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($staff as $row)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $row->Staff_ID }}</td>
						<td>{{ $row->User_Name }}</td>
						<td><a href="mailto:{{ $row->email }}">{{ $row->email }}</a></td>
						<td>
							<a href="{{ route('admin.staff_profile', $row->id) }}" class="btn btn-info">Profile</a>
						</td>
						<td>
							<form action="{{ route('admin.delete_staff', $row->id) }}" method="POST">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger"
									onclick="return confirm('Confirm to delete?')">Delete</button>
							</form>

						</td>
					</tr>
					@endforeach
				</tbody>

				<tfoot>
					<tr>
						<th>No</th>
						<th>Staff ID</th>
						<th>Username</th>
						<th>Email</th>
						<th>View</th>
						<th>Deletion</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ mix('resources/js/validation.js') }}"></script>
<script>
	$(document).ready(function () {
    $('#staff_list').DataTable();
});
</script>
@endsection