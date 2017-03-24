@extends('layouts.app') @section('content')
<div class="container">


	<div class="row admincontent">
		<nav class="z-depth-0">
			<div class=" nav-wrapper z-depth-0">
				<div class="col s12">
					<a href="/admin" class="breadcrumb ">Menu</a> <a href="/offertes" class="breadcrumb">Offertes</a> <a href="#!" class="breadcrumb">{{ $offerte->id}}</a><a href="#!" class="breadcrumb">Third</a>
				</div>
			</div>
		</nav>
		<div class="row ">
			<div class="col s3">
				<div class="row">
					<h3>Offerte #{{ $offerte->id }}</h3>
				</div>
				<div class="offertebuttons">
					@if($offerte->status == 2)
					<p>Status is voltooid.</p>
					@endif
				</div>




			</div>
			<div class="col s9 #f5f5f5 grey lighten-4 z-depth-2">

				<h3>Gegevens</h3>
			
				<div class="row">
					<form action="/offertes/{{ $offerte->id }}/edit" class="col gegevens s12" method="POST">
						{{ csrf_field() }}
<input name="_method" type="hidden" value="PUT">
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">perm_identity</i> <input name="name" value="{{ $offerte->name }}" required id="full_name" type="text" class="validate"> <label for="first_name">Naam</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">email</i> <input value="{{ $offerte->email }}" required id="icon_email" name="email" type="email" class="validate"> <label for="icon_email">Email</label>
							</div>
							<div class="input-field col s6">
								<i class="material-icons prefix">phone</i> <input value="{{ $offerte->telephone }}" required data-length="10" name="phone" id="icon_telephone" type="tel" class="validate"> <label for="icon_telephone">Telephone</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix" id="icon_trans">library_books</i>
								<select name="soort">
									<option value="{{ $offerte->kind }}" disabled selected>{{ $offerte->kind }}</option>
									<option value="woordelijk">Woordelijk</option>
									<option value="letterlijk">Letterlijk</option>
								</select>
								<label for="icon_trans"></label>
							</div>

						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix" id="icon_trans">subject</i>
								<select name="onderwerp">
									<option value="{{ $offerte->subject }}" disabled selected>Onderwerp</option>
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
								</select>
								<label for="icon_trans"></label>
							</div>

						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">av_timer</i> <input name="minuten" value="{{ $offerte->minutes }}" required id="full_name" type="text" class="validate"> <label for="first_name">Lengte in minuten</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">mode_edit</i>
								<textarea id="textarea1" name="opmerkingen" class="materialize-textarea" data-length="120">{{ $offerte->comments }}</textarea>
								<label for="textarea1">Eventuele opmerkingen</label>
							</div>
						</div>


						<div class="row">
						<div class="col s6 input-field">
						<i class="material-icons prefix">av_timer</i> 
								<select name="status" class="icons">
									@if($offerte->status == 0)
									<option value="0" selected>Geen</option>
									<option value="1" class="circle">In behandeling</option>
									<option value="2" class="circle">Voltooid</option>
									@elseif($offerte->status == 1)
									<option value="0" class="circle">Geen</option>
									<option value="1" selected>In behandeling</option>
									<option value="2" class="circle">Voltooid</option>
									@elseif($offerte->status == 2)
									<option value="0" class="circle">Geen</option>
									<option value="1" class="circle">In behandeling</option>
									<option value="2" selected>Voltooid</option>
									@endif
								</select>
								<label>Status</label>
							</div>
							<div class="col s6 submit input-field">
								<button class="btn-large waves-effect waves-light left" type="submit">
									Opslaan<i class="material-icons right">save</i>
								</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
