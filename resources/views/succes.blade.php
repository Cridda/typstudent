<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<title>Typstudent</title>

<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" href="{{ asset('css/materialize.min.css') }}" rel="stylesheet" media="screen,projection">

<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>



<div class="succes container">

<h1>Uw offerte is succesvol verstuurd. Binnen 3 werkdagen hoort u van ons!</h1>
<p>U wordt nu terug geleid naar de homepagina...</p>
  <div class="preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</div>

















	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
	<script type="text/javascript">
	setTimeout(function () {
		   window.location.href= '/'; // the redirect goes here

		},5000);
	  </script>

</body>
</html>
