<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

	<!-- Scripts -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
	<div id="app">

		<nav
			class="navbar navbar-expand-md navbar-light shadow-sm 
		@if (auth()->check() && (auth()->user()->role == 'admin' || auth()->user()->role == 'staff')) bg-secondary
			@else
				bg-primary @endif">


			<div class="container-fluid">
				@auth
					<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive"
						aria-controls="offcanvasResponsive"><i class="fa-solid fa-bars fa-xl"></i></button>
				@endauth
				<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Laravel') }}
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav me-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ms-auto">
						<!-- Authentication Links -->
						@guest
							@if (Route::has('login'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
							@endif

							@if (Route::has('register'))
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@endif
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->User_Name }}
								</a>

								<div class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>

		<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasResponsive"
			aria-labelledby="offcanvasResponsiveLabel">
			<div class="offcanvas-header">
				<h5 class="offcanvas-title" id="offcanvasResponsiveLabel">
					<span class="d-none d-lg-flex">Menu</span>
					<span class="d-lg-none">e-Munakahat</span>
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive"
					aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
				<nav class="nav nav-pills flex-column">
					<form action="" class="d-lg-none" method="get">
						<div class="input-group">
							<input class="form-control" type="text" placeholder="Search">
							<button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
						</div>
					</form>
					<br>
					<a class="nav-link" href="">Profile</a>
					@if (auth()->check() && auth()->user()->role == 'admin')
					@elseif (auth()->check() && auth()->user()->role == 'staff')
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
								aria-expanded="false">
								Kursus Pra Perkahwinan
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{ route('staff.LocationList') }}">Daftar Lokasi</a></li>
								<li><a class="dropdown-item" href="{{ route('staff.InfoList') }}">Daftar Maklumat</a></li>
								<li><a class="dropdown-item" href="{{ route('staff.ApplicantList') }}">Senarai Peserta</a></li>
								<li><a class="dropdown-item" href="{{ route('staff.ApplicantAttendance') }}">Kehadiran Peserta</a></li>
							</ul>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
								aria-expanded="false">
								Permohonan Berkahwin
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="{{ route('staff.ApplicationList') }}">Senarai Pemohon</a></li>
							</ul>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
								aria-expanded="false">
								Pendaftaran Perkahwinan
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">1</a></li>
								<li><a class="dropdown-item" href="#">2</a></li>
							</ul>
						</div>
						<div class="btn-group" role="group">
							<button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
								aria-expanded="false">
								Khidmat Nasihat
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">1</a></li>
								<li><a class="dropdown-item" href="#">2</a></li>
							</ul>
						</div>
					@elseif (auth()->check() && auth()->user()->role == 'user')
						<a class="nav-link" href="{{ route('user.terms') }}">Kursus Pra Perkahwinan</a>
						<a class="nav-link" href="{{ route('user.ApplicationPemohon')}}">Permohonan Berkahwin</a>
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="pendaftaranDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">Pendaftaran Perkahwinan</a>
							<ul class="dropdown-menu" aria-labelledby="pendaftaranDropdown">
								<li><a class="nav-link " href="{{ route('user.MarriageCard') }}">Kad Nikah</a></li>
								<li><a class="nav-link" href="{{ route('user.RegisterList') }}">Carian Pendaftaran</a></li>
							</ul>
							<a class="nav-link" href="">Khidmat Nasihat</a>
					@endif
				</nav>
			</div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						Copyright &COPY; <span id="year"></span> e-Munakahat. All Rights Reserved.
					</div>
				</div>
			</div>
			<script src="{{ mix('resources/js/validation.js') }}"></script>
			<script>
				const year = new Date().getFullYear()
				document.getElementById('year').innerHTML = year;
			</script>
		</div>

		<main class="py-4">
			@yield('content')
		</main>
	</div>
</body>

</html>
