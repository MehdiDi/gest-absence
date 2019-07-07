<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filiere;
use App\Group;

class FiliereController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() {
        
        $filieres = $this->filieresByDept(auth()->user()->dept_id);
        

        return view('filieres')->with(['filieres' => $filieres, 'chef' => (is_null(auth()->user()->chef_dept_id) ?
                                                                            false : true)]);
    }
    
    public function show($idF) {
        
        $groups = Filiere::find($idF)->groups;
        return view('groups')->with('groups', $groups);
    }

    public function getFilieres(){
        $filieres = $this->filieresByDept(auth()->user()->dept_id);
        

        return view('chef.filieres')->with('filieres', $filieres);
    }


    private function filieresByDept($dept_id) {
        $filieres = Filiere::where('dept_id', $dept_id)->orderBy('nomFiliere', 'desc')->get();
        return $filieres;
    }


}
