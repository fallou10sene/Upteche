<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Model\emploisl1com;

class HomeController extends Controller
{
    public function index()
    {
    	return view('accueil');
    }


    public function inscription()
    {
    	return view('inscription');
    }

     public function connexion(Request $request)
    {

    	$this->validate($request, [
    		'email' => 'required|string|email', 
    		'password' => 'required|string|min:6',  
    	]);
       
       $connection = auth()->attempt([

            'email' => request('email'),
            'password' => request('password'),
        ]);
      
        $l1com = emploisl1com::orderBy('id', 'DESC')->paginate(1);
        $professeur = User::where('fonction', 'professeur')->paginate(2);
        $etudiant = User::where('fonction', 'etudiant' )->paginate(2);
        $administrateur = User::all()->where('fonction', 'administrateur')->except(Auth::id());
       
       if($connection)
       {
            return view('compte',compact(['professeur', 'etudiant', 'administrateur', 'l1com']));
       }
       else
       {
            return back()->withInput()->withErrors(['email' => 'Vos identifiants sont incorrects.',]);
       }
       
    }

    


    public function enregistre(Request $request)
    {
    	$this->validate($request, [

    		'prenom' => 'required|string',
    		'nom' => 'required|string', 
    		'email' => 'required|string|email|unique:Users', 
    		'password' => 'required|string|min:6', 
    		'fonction' => 'required|string', 
    		'date' => 'required|date', 
    		'sexe' => 'required|string',  
    	]);
    	 
    	User::create([
    		'prenom' => request('prenom'),
    		'nom' => request('nom'),
    		'email' => request('email'),
    		'password' =>bcrypt(request('password')),
    		'fonction' => request('fonction'),
    		'date' => request('date'),
    		'sexe' => request('sexe'),
    	]);
    	
    	return view('accueil');
    }

    public function deconnexion()
    {
      auth()->logout();
      return redirect('/'); 
    }


}
