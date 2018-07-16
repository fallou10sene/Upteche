@extends('layouts.admin')
@section('contenu')
 <h4 class="m-4 align-middle text-uppercase bg-danger p-2 text-white text-center rounded font-weight-bold">
	Le nombre d' administrateur enregistre est <span class=" bg-dark p-2 ml-2"> {{ count($adminitrateur)}} </span>
</h4>

@foreach($adminitrateur as $admin)
	
	<h5 class="m-1 bg-dark text-white p-2 rounded shadow-sm">{{ $admin->avatars.' '.$admin->prenom.'  '.$admin->nom }}</h5>


	<a href="{{route('profiladmin', $admin)}}" class="btn btn-success float-right  d-block text-white" style="margin-top:-43px; margin-right: 230px;"> 
			Voir Profil 
	</a>
	<a href="#" class="btn btn-primary float-right  d-block text-white" style="margin-top:-43px; margin-right: 120px;"> 
			Modifier  
	</a>
	<form onsubmit="return confirm('Voulez vous Supprimer l\'étudiant {{$admin->prenom}}')"method="POST" 
		action="{{ route('supprimeradmin', $admin) }}">
		@csrf
		@method('delete')
		<button class="btn btn-danger float-right align-middle d-inline-block button" style="margin-top:-43px;"> 
			Supprimer 
		</button>
	</form>
@endforeach
@endsection