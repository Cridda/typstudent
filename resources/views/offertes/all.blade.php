@extends('layouts.app') @section('content')
<div class="container">


	<div class="row admincontent">
		<nav class="z-depth-0">
			<div class=" nav-wrapper z-depth-0">
				<div class="col s12">
					<a href="/admin" class="breadcrumb ">Menu</a> <a href="/offertes" class="breadcrumb">Offertes</a> <a href="#!" class="breadcrumb">Third</a>
				</div>
			</div>
		</nav>
		<div class="row ">
			<div class="col s3">
				<h2>Alle offertes</h2>
			</div>
			<div class="col s9 input-field">
				<input type="text" id="search" placeholder="Zoek naar offertes">
			</div>

		</div>
		<table id="clickable">
			<thead>
				<tr>
					<th>Naam</th>
					<th>Email</th>
					<th>Datum geplaatst</th>
					<th></th>
				</tr>
			</thead>

			<tbody>
				@foreach ($offertes as $offerte) @if($offerte->status == 2)
				<tr class="statusIsDone">@elseif($offerte->status == 1)
				
				
				<tr class="statusIsDoing">@else
				
				
				<tr>
					@endif
					<td>{{ $offerte->name }}</td>
					<td>{{ $offerte->email }}</td>
					<td>{{ $offerte->created_at}}</td>
					<td style="display: flex; justify-content: flex-end;">@if($offerte->status != 2) <a href="/offertes/{{$offerte->id}}/done" class="btn-floating green darken-3 waves-effect"><i class="material-icons">done</i></a>&nbsp; @endif <a href="/offertes/{{$offerte->id}}/" class="btn-floating blue darken-3 waves-effect"><i class="material-icons">mode_edit</i></a>&nbsp;<a class="red darken-3 btn-floating waves-effect" href="offerte/{{$offerte->id}}/delete"><i class="material-icons">delete</i></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="divider"></div>
		<div class="row">
			<div class="col s6">{{ $offertes->links() }}</div>
			<div class="col s6 legenda">
				<p class="right">Wit = niet behandeld, geel = in behandeling, groen = behandeld.</p>
			</div>
		</div>
	</div>
</div>
@endsection

