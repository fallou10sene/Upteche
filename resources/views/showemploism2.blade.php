@extends('layouts.admin')
@section('contenu')
<h4 class="p-4">Emplois M2 Communication</h4>
	@foreach($m2com as $m2com)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m2com->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois M2 Informatique</h4>
	@foreach($m2info as $m2info)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m2info->created_at	}}</span>
				<a href="">
				  <button class="btn btn-success px-4"> Voir </button>
				</a> 
				<a href="">
				  <button class="btn btn-danger"> Supprimer </button>
				</a>
				</span>
				</div>		
	@endforeach
<h4 class="p-4">Emplois M2 Multimedia</h4>
	@foreach($m2multi as $m2multi)
		
				<div class="d-inline-block m-2" style="margin-top: -25px;">

				<span>
					<span class="font-weight-bold m-2">{{ $m2multi->created_at	}}</span>
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