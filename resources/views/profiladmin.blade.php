@extends('layouts.admin')
@section('contenu')



<h4>Voici le profil de {{ $adminitrateur->prenom}}</h4> 
<div class="row bg-dark p-2 m-2 text-white font-weight-bold rounded">
	<div class="col-md-2">
		{{ $adminitrateur->prenom}}
	</div>
	<div class="col-md-2">
		{{ $adminitrateur->nom}}
	</div>
	<div class="col-md-2">
		{{ $adminitrateur->date}}
	</div>
	<div class="col-md-1">
		{{ $adminitrateur->sexe}}
	</div>
	<div class="col-md-3 text-center">
		{{ $adminitrateur->email}}
	</div>
	<div class="col-md-2">
		{{ $adminitrateur->fonction}}
	</div>
	<div class="col-md-2">
		{{ $adminitrateur->avatars}}
	</div>
	
</div>






@endsection