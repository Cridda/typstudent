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
			@if (Auth::guest()) <a id="loginbutton" class="z-depth-3" href="{{ route('login') }}">Login</a> @else <a href="#" class="" data-toggle="dropdown" role="button" aria-expanded="false"><strong>Ingelogd als: {{ Auth::user()->name }}</strong>  &nbsp;<span class="caret"></span>
			</a> <a class="btn" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Uitloggen </a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
			@endif

		</div>
	</div>

	<!-- Scripts -->

	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript">
	 $(document).ready(function() {
		    $('select').material_select();
		});
	  $(document).ready(function(){
		    $('.transcriptie').tooltip({delay: 50});
		  });
	$("#search").keyup(function () {
	    var value = this.value.toLowerCase().trim();

	    $("table tr").each(function (index) {
	        if (!index) return;
	        $(this).find("td").each(function () {
	            var id = $(this).text().toLowerCase().trim();
	            var not_found = (id.indexOf(value) == -1);
	            $(this).closest('tr').toggle(!not_found);
	            return not_found;
	        });
	    });
	});
	$("table tr").click(function(){
		   $(this).addClass('selected').siblings().removeClass('selected');    
		   var value=$(this).find('td:first').html();
		});

		$('#table tr').on('click', function(e){
		    alert(window.location=link.attr('href'));
		});
		

	</script>
</body>
</html>
