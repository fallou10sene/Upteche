@extends('layouts.admin')
@section('contenu')



<h4>Voici le profil de {{ $professeur->prenom}}</h4> 
<div class="row bg-dark p-2 m-2 text-white font-weight-bold rounded">
	<div class="col-md-2">
		{{ $professeur->prenom}}
	</div>
	<div class="col-md-2">
		{{ $professeur->nom}}
	</div>
	<div class="col-md-2">
		{{ $professeur->date}}
	</div>
	<div class="col-md-1">
		{{ $professeur->sexe}}
	</div>
	<div class="col-md-3 text-center">
		{{ $professeur->email}}
	</div>
	<div class="col-md-2">
		{{ $professeur->fonction}}
	</div>
	<div class="col-md-2">
		{{ $professeur->avatars}}
	</div>
	
</div>






@endsection