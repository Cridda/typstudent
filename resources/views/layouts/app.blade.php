<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>TypStudent AdminPanel</title>

<!-- Styles -->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" href="{{ asset('css/materialize.min.css') }}" rel="stylesheet" media="screen,projection">
<!-- Scripts -->
<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<div id="app">
		<nav class="transparant z-depth-0">
			<div class="container">
				<div class="nav-wrapper">




					<!-- Branding Image -->
					<a href="{{ url('/admin') }}"> TypStudent AdminPanel v0.1 </a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">&nbsp;
					</ul>

					<!-- Right Side Of Navbar -->

				</div>
			</div>
		</nav>

		@yield('content')

		<div class="right fixed-action-btn stickylog ">
			<!-- Authentication Links -->
			@if (Auth::guest()) <a id="loginbutton" class="z-depth-3" href="{{ route('login') }}">Login</a> @else <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false"> Ingelogd als: {{ Auth::user()->name }} &nbsp;<span class="caret"></span>
			</a> <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Uitloggen </a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			@endif

		</div>
	</div>

	<!-- Scripts -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
	$("#search").on("keyup", function() {
	    var value = $(this).val();

	    $("table tr").each(function(index) {
	        if (index !== 0) {

	            $row = $(this);

	            var id = $row.find("td:first").text();

	            if (id.indexOf(value) !== 0) {
	                $row.hide();
	            }
	            else {
	                $row.show();
	            }
	        }
	    });
	});</script>
</body>
</html>
