@extends('layouts.app') @section('content')
<div class="container">
	<div class="row admincontent">
	<nav class="z-depth-0">
			<div class=" nav-wrapper z-depth-0">
				<div class="col s12">
					<a href="/admin" class="breadcrumb ">Menu</a> <a href="/offertes" class="breadcrumb">Offertes</a> 
				</div>
			</div>
		</nav>
		<div class="col dashboard">
			<h2>Goeiedag {{ Auth::user()->name }}! Er zijn op dit moment {{ $offertesCount }} open offertes.</h2>
			<!-- ADMIN BUTTONS -->
			<div class="row adminbtnrow">
				<div class="col s3">
					<a class="adminbtn btn-large waves-effect" href="/offertes">Bekijk offertes</a>
				</div>
				<div class="col s3">
					<a class="adminbtn btn-large green waves-effect">Klanten</a>
				</div>
				<div class="col s3">
					<a href="#" class="adminbtn btn-large yellow darken-3 waves-effect">Studenten</a>
				</div>
				<div class="col s3">
					<a href="#" class="adminbtn btn-large grey waves-effect">Instellingen</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
