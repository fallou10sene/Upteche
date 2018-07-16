<!DOCTYPE html>
<html>
<head>
      <title></title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
      <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/bootstrap1.js') }}"></script>
</head>
<body>
	<div class="container-fluid">
		


		@if(auth()->user()->fonction == 'professeur' )
            @include('layouts.menu_prof')
            	<h1>Bonjour Professeur</h1>
            @elseif(auth()->user()->fonction == 'etudiant' )
            @include('layouts.menu_etu')
             	<div class="container bg-dark rounded">                        
                        <div class="row text-white mt-5">
                              <!--Emplois du temps L1 -->
                              <div class="col-md-4">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Informatique 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                              <!--Emplois du temps L2 -->
                              <div class="col-md-4 ">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                              <!--Emplois du temps L3 -->
                              <div class="col-md-4">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Informatique 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                        </div>
                        <div class="row text-white">
                              <!--Emplois du temps L1 -->
                              <div class="col-md-4">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Informatique 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                              <!--Emplois du temps L2 -->
                              <div class="col-md-4 ">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Informatique 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                              <!--Emplois du temps L3 -->
                              <div class="col-md-4">
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Informatique 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2 ">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                      <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Communication 
                                          </div>
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary"> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                                    <div class="row">
                                          <div class="col-md-12 bg-success p-1 m-1 text-center text-white font-weight-bold text-uppercase rounded">
                                               Emploi du temps Licence 1 Multimedia 
                                          </div>
                                          
                                    </div>                          
                                    @foreach($l1com as $licom)
                                    <div class="row m-1">
                                          <div class="col-md-1">
                                          </div>
                                          <div class="col-md-6 p-2">{{$licom->created_at}}</div>
                                          <div class="col-md-4 ml-4">
                                                <a href="storage/{{$licom->emplois}}" download="{{$licom->emplois}}">
                                                <button class="btn btn-primary "> Download </button>
                                                </a>
                                          </div>
                                    </div>
                                    @endforeach
                               </div>
                        </div>      
                  </div>
            @elseif(auth()->user()->fonction == 'administrateur' )
                  @include('layouts.menu_admin')
            	<div class="row ">
            		<div class="col-md-2 p-3 bg-success text-white bg-dark py-5">
            			<div class="row">
            				<div class="col-md-12 text-center">
            				<img src="{{ asset('images/profil.jpg') }}" class="rounded-circle img-fluid">
            				</div>
            			</div>
            			<div class="row mt-4">
            				<div class="col-md-12 text-center">
            					{{ auth()->user()->prenom.' '.auth()->user()->nom }}
            				</div>
            			</div>
            			<div class="row mt-4">
            				<div class="col-md-12 text-left"></div>
            			</div>
            			<div class="row mt-4 rounded ">
            				<div class="col-md-8 text-left ">
            					<a href="{{ url('ajouteremploidutemps')}}" 
                                          class="btn btn-danger">Ajouter Emplois du Temps</a>
            				</div>
            			</div>
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
                  				<a href="{{ route('inscription') }}" 
                                          class="btn btn-danger">Ajouter Administrator Site</a> 
            				</div>
            			</div>
            			
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
            					<a href="{{ url('afficherl1com') }}" class="btn btn-danger"> Emplois du Tem Licence 1</a>
            				</div>
            			</div>
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
            					<a href="{{ url('afficherl2com') }}" class="btn btn-danger"> Emplois du Tem Licence 2</a>
            				</div>
            			</div>
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
            					<a href="{{ url('afficherl3com') }}" class="btn btn-danger"> Emplois du Tem Licence 3</a>
            				</div>
            			</div>
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
            					<a href="{{ url('afficherm1com') }}" class="btn btn-danger">Emplois du Tem Master 1</a>
            				</div>
            			</div>
            			<div class="row mt-2">
            				<div class="col-md-12 text-left">
            					<a href="{{ url('afficherm2com') }}" class="btn btn-danger"> Emplois du Tem Master 2</a>
            				</div>
            			</div>
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left">
                                          <a href="{{ route('listedesteachers') }}" class="btn btn-danger">
                                                Liste des teachers Inscrits
                                          </a> 
                                    </div>
                              </div>
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left">
                                          <a href="{{ route('listedesstudents') }}" class="btn btn-danger ">Liste des students Inscrits</a> 
                                    </div>
                              </div>
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left">
                                          <a href="{{ route('listedesadministrator') }}" class="btn btn-danger ">Liste des administrateurs I </a> 
                                    </div>
                              </div>
                              
            			<div class="row mt-2">
            				<div class="col-md-12 text-left"></div>
            			</div>
            			
            			
            			
            		</div>
            		<div class="col-md-10">
            			
            				<div class="row my-4">
            					<div class="col-md-12">
            						<h5>Liste des Professeurs Inscrits {{ count($professeur)}}</h5>
	            					@foreach($professeur as $prof)
	            					 <li class="bg-dark m-1 p-3 font-weight-bold text-white list-unstyled rounded shadow-sm text-uppercase">
	            						{{$prof->prenom.' '.$prof->nom}}
	            					<a href="#" class="btn btn-danger float-right align-middle d-inline-block button" style="margin-top:-7px;"> 
                                                            Voir Profil 
                                                </a>
	            					</li>
	            					@endforeach
                                             
            					</div>
            				</div>
            				<div class="row my-4">
            					<div class="col-md-12">
            						<h5>Liste des Etudiants Inscrits {{ count($professeur)}}</h5>
	            			 		@foreach($etudiant as $etu)
	            					 <li class="bg-dark p-3 font-weight-bold text-white list-unstyled rounded shadow-sm text-uppercase m-1">

	            						{{$etu->prenom.' '.$etu->nom}}


	            					<a href="#" class="btn btn-danger float-right align-middle d-inline-block button" style="margin-top:-7px;"> 
                                                            Voir Profil 
                                                </a>
	            					</li>
	            					@endforeach
                                               
            					</div>
            			 			
            				</div>
            				<div class="row my-4">
            					<div class="col-md-12">
            					<h5>Liste des Administrateurs Enregistrés {{ count($administrateur)}}</h5>
	            			 		@foreach($administrateur as $admin)
	            					<li class="bg-dark p-3 font-weight-bold text-white list-unstyled rounded shadow-sm text-uppercase m-1">
	            						{{$admin->prenom.' '.$admin->nom}}
		            					
			            				<a href="#" class="btn btn-danger float-right align-middle d-inline-block button" style="margin-top:-7px;"> 
			            					Voir Profil 
			            				</a>
		            				
	            					</li>
	            					@endforeach

                                               
	            				</div>
            			 			
            				</div>            				
            			</div>
            			
            		            		
            	</div>
            @endif


		
			
			
			
	</div>
</body>