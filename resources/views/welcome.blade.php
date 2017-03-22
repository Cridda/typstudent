<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<title>Typstudent</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<link type="text/css" href="{{ asset('css/materialize.min.css') }}"
	rel="stylesheet" media="screen,projection">

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div class="wrapper">
		<div class="hero">

			<header>
				<nav class="z-depth-0 ">
					<div class="nav-wrapper container ">
						<a href="#!" class="brand-logo"><i class="material-icons">spellcheck</i>TypStudent</a>
						<a href="#" data-activates="mobile-demo"
							class="button-collapse right"><i class="material-icons">menu</i></a>
						<ul class="right hide-on-med-and-down ">
							<li><a href="sass.html">Over ons</a></li>
							<li><a href="badges.html">Tarieven</a></li>
							<li><a href="collapsible.html">Blog</a></li>
							<li><a href="mobile.html"><i class="material-icons">search</i></a></li>
							@if (Auth::guest())

							<li><a href="{{ route('register') }}">Registreren</a></li>
							<li><a href="#modal1">Login</a></li> @else
							<li><a href="#!" class="dropdown-button"
								data-activates="dropdown1"> {{ Auth::user()->name }} <i
									class="material-icons right">arrow_drop_down</i>
							</a></li> @endif



						</ul>
						<ul class="side-nav" id="mobile-demo">
							<li><a href="sass.html">Over ons</a></li>
							<li><a href="badges.html">Tarieven</a></li>
							<li><a href="collapsible.html">Blog</a></li>
							<li><a href="mobile.html">Login</a></li>
						</ul>
						<!-- Dropdown Structure -->
						<ul id="dropdown1" class="dropdown-content">
							<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
								<form id="logout-form" action="{{ route('logout') }}"
									method="POST" style="display: none;">{{ csrf_field() }}</form></li>
							<li><a href="#!">two</a></li>
							<li class="divider"></li>
							<li><a href="#!">three</a></li>
						</ul>
					</div>
				</nav>
			</header>
			<div class="divider"></div>




			<div class="container">

				<div class="row">
					<div class="col s12 center-align">
						<h1 id="hero-title">
							<strong class="bold">Onze typstudenten</strong><span class="thin">
								transcriberen al jouw gewenste stukken al vanaf <strong
								class="bold">90 cent</strong> per minuut!
							</span>
						</h1>
					</div>
				</div>

				<div class="row">
					<div class="col s12">
						<div class="center-align">
							<a href="#offerte"
								class="btn blue darken-3 btn-large create-list-link hero-btn">Begin
								hier!</a>

						</div>
					</div>

				</div>



			</div>
		</div>
		<!-- Form voor de offerte van een transcriptie -->
		<div class="offerte" style="height: 100vh; background-color: #ecf0f1">
			<div class="container" id="offerte">

				<form class="col s12 offerteform">
					<h3>Vraag geheel vrijblijvend een offerte aan!</h3>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">perm_identity</i> <input
								required id="full_name" type="text" class="validate"> <label
								for="first_name">Uw volledige naam</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix">email</i> <input required
								id="icon_email" type="email" class="validate"> <label
								for="icon_email">Email</label>
						</div>
						<!--  <div class="row">
							<div class="input-field col s12">
								<input disabled value="I am not editable" id="disabled"
									type="text" class="validate"> <label for="disabled">Disabled</label>
							</div>
						</div>
						-->

						<div class="input-field col s6">
							<i class="material-icons prefix">phone</i> <input required
								data-length="10" id="icon_telephone" type="tel" class="validate">
							<label for="icon_telephone">Telephone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix" id="icon_trans">library_books</i>
							<select>
								<option value="" disabled selected>Soort transcriptie</option>
								<option value="1">Woordelijk - Uitgewerkt in een mooi verhaal,
									zonder stopwoorden en herhalingen.</option>
								<option value="2">Letterlijk - Uitgewerkt in z'n oorspronkelijke
									geheel, letterlijk alles wordt getranscribeerd.</option>
							</select> <label for="icon_trans"></label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix" id="icon_trans">subject</i> <select>
								<option value="" disabled selected>Onderwerp</option>
								<option value="1">Biologie en Milieuwetenschappen</option>
								<option value="2">Economie</option>
								<option value="3">Filosofie</option>
								<option value="4">Geschiedenis en kunstgeschiedenis</option>
								<option value="5">Informatica en informatiekunde</option>
								<option value="6">Maatschappijwetenschappen</option>
								<option value="7">Medische wetenschappen</option>
								<option value="8">Natuur- en sterrenkunde</option>
								<option value="9">Pedagogische wetenschappen en onderwijskunde</option>
								<option value="10">Politieke en bestuurswetenschappen</option>
								<option value="11">Psychologie</option>
								<option value="12">Rechtsgeleerdheid</option>
								<option value="13">Ruimtelijke wetenschappen</option>
								<option value="14">Scheikunde</option>
								<option value="15">Talen</option>
								<option value="16">Theologie en religiewetenschappen</option>
								<option value="17">Wiskunde</option>
								<option value="18">Bedrijfswetenschappen</option>
								<option value="0">Overig</option>
							</select> <label for="icon_trans"></label>
						</div>

					</div>
					<div class="row">
						<div class="input-field col s1">
							<i class="material-icons prefix" id="icon_trans">av_timer</i> <label>Minuten</label>
						</div>
						<div class="input-field col s12">
							<p class="range-field">
								<input type="range" id="timepick" min="0" max="180" />
							</p>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<i class="material-icons prefix">mode_edit</i>
							<textarea id="textarea1" class="materialize-textarea"
								data-length="120"></textarea>
							<label for="textarea1">Eventuele opmerkingen</label>
						</div>
					</div>


					<div class="row">
						<div class="col s12 submit">
							<button class="btn-large waves-effect waves-light" type="submit"
								name="action">
								Submit <i class="material-icons right">send</i>
							</button>
						</div>
					</div>
				</form>
			</div>

		</div>

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
	  $(document).ready(function() {
		    $('select').material_select();
		});
	  $(document).ready(function(){
		    $('.transcriptie').tooltip({delay: 50});
		  });
		        
	  </script>

</body>
</html>
