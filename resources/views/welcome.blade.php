<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<title>Typstudent</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link type="text/css" href="{{ asset('css/materialize.min.css') }}"
	rel="stylesheet" media="screen,projection">


</head>
<body>
	<header>
		<nav class="z-depth-0 ">
			<div class="nav-wrapper container">
				<a href="#!" class="brand-logo"><i class="material-icons">spellcheck</i>TypStudent</a>
				<a href="#" data-activates="mobile-demo"
					class="button-collapse right"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Over ons</a></li>
					<li><a href="badges.html">Tarieven</a></li>
					<li><a href="collapsible.html">Blog</a></li>
					<li><a href="#modal1">Login</a></li>
					<li><a href="mobile.html"><i class="material-icons">search</i></a></li>


				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="sass.html">Over ons</a></li>
					<li><a href="badges.html">Tarieven</a></li>
					<li><a href="collapsible.html">Blog</a></li>
					<li><a href="mobile.html">Login</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div class="divider"></div>

	<div class="hero">


		<div class="container">

			<div class="row">
				<div class="col s12 center-align">
					<h1 id="hero-title">
						<strong class="bold">Jouw typ student</strong><span class="thin">
							transcribeert al jouw gewenste stukken goedkoop en met
							gegarandeerde kwaliteit </span>
					</h1>
				</div>
			</div>

			<div class="row">
				<div class="col s12">
					<div class="center-align">
						<a href="#create" class="btn btn-large create-list-link hero-btn">Begin
							hier!</a>

					</div>
				</div>

			</div>



		</div>
	</div>
	<div class="divider"></div>
	<div class="row">
		<h1>test</h1>
	</div>






















	<div id="modal1" class="modal">
					<div class="modal-content">
						                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
					</div>
					<div class="modal-footer">
						<a href="#!"
							class=" modal-action modal-close waves-effect waves-green btn-flat">Sluit</a>
					</div>
				</div>
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript"
		src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript">
	$(".button-collapse").sideNav();
	  $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal').modal();
		  });
	</script>

</body>
</html>
