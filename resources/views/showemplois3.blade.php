@extends('layouts.admin')
@section('contenu')
<h4 class="p-4">Emplois L3 Communication</h4>
	@foreach($l3com as $l3com)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l3com->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L3 Informatique</h4>
	@foreach($l3info as $l3info)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l3info->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois L3 Multimedia</h4>
	@foreach($l3multi as $l3multi)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $l3multi->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
@endsection