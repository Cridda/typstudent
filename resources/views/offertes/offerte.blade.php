@extends('layouts.app') @section('content')
<div class="container">


	<div class="row admincontent">
		<nav class="z-depth-0">
			<div class=" nav-wrapper z-depth-0">
				<div class="col s12">
					<a href="/admin" class="breadcrumb ">Menu</a> <a href="/offertes" class="breadcrumb">Offertes</a> <a href="#!" class="breadcrumb">{{ $offerte->id }}</a><a href="#!" class="breadcrumb">Third</a>
				</div>
			</div>
		</nav>
		<div class="row ">
			<div class="col s3">
				<h2>Offerte met id{{ $offerte->id }}</h2>
			</div>
			<div class="col s9 input-field">
				<input type="text" id="search" placeholder="Zoek naar offertes">
			</div>

		</div>
	</div>
</div>
@endsection
