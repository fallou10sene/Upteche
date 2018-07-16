<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function professeur()
    {	   		
    		return view('professeur');
    }
    public function etudiant()
    {	
    		  		
    		return view('etudiant');
    }
    public function administrator()
    {   
                    
            return view('administrator');
    }

    
    
}
