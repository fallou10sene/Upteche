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
      <div class="container-fluid" style="position: relative;">
            <div class="row bg-danger p-2 text-white">
                        <div class="col-md-2">
                              
                        </div>
                        <div class="col-md-4">
                              
                              <a href="#" class="btn btn-danger">UPTECH</a>
                        </div>
                        @if(auth()->check())
                              <div class="col-md-2">
                                    <a href="{{ url('deconnexion') }}" class="btn btn-danger">Déconnexion</a>
                              </div>
                        @else
                              <div class="col-md-2">
                                    <a href="{{ url('/') }}" class="btn btn-danger">Connexion</a>
                              </div>
                              <div class="col-md-2">
                                    <a href="{{ url('inscription') }}" class="btn btn-danger">Inscription</a>
                              </div>
                        @endif
                        
                  </div>
      </div>
     <div class="container-fluid">
          
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
                                          <a href="{{ route('listedesteachers') }}" class="btn btn-danger">Liste des teachers Inscrits</a> 
                                    </div>
                              </div>
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left">
                                          <a href="{{ route('listedesstudents') }}" class="btn btn-danger ">Liste des students Inscrits</a> 
                                    </div>
                              </div>
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left">
                                          <a href="{{ route('listedesadministrator') }}" class="btn btn-danger ">Liste des administrateurs </a> 
                                    </div>
                              </div>
                              
                              <div class="row mt-2">
                                    <div class="col-md-12 text-left"></div>
                              </div>
                              
                              
                              
                        </div>
                        <div class="col-md-10">
                              
                              @yield('contenu')                                
                        </div>
                              
                                                
                  </div>                 
      </div>
</body>
</html>
	
