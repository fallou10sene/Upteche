@extends('layouts.admin')
@section('contenu')
<h4 class="m-4 align-middle text-uppercase bg-danger p-2 text-white text-center rounded font-weight-bold">
	Le nombre d' etudiant inscrit est <span class=" bg-dark p-2 ml-2"> {{ count($etudiant)}} </span>
</h4>

@foreach($etudiant as $etu)
	
	<h5 class="m-1 bg-dark text-white p-2 rounded shadow-sm">{{ $etu->prenom.' '.$etu->nom }}</h5>
	<a href="{{ route('profiletu', $etu) }}" class="btn btn-success float-right  d-block " 
	style="margin-top:-43px; margin-right: 120px;"> 
			Voir Profil 
	</a>
	<form onsubmit="return confirm('Voulez vous Supprimer l\'étudiant {{$etu->prenom}}')"method="POST" 
		action="{{ route('enleveretu', $etu) }}">
		@csrf
		@method('delete')
		<button class="btn btn-danger float-right align-middle d-inline-block button" style="margin-top:-43px;"> 
			Supprimer 
		</button>
	</form>

@endforeach
@endsection