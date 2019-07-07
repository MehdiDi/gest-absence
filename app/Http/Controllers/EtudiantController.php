<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filiere;
use App\Etudiant;
use App\Group;

class EtudiantController extends Controller
{
    public function index($idF){
        $filiere = Filiere::find($idF);
        $etudiants = $filiere->etudiants;

        return view('chef.etudiants_liste')->with(['etudiants' => $etudiants, 'idF' => $idF, 'nomF' => $filiere->nomFiliere]);
    }
    public function new($idF) {
        $groups = Filiere::find($idF)->groups;

        return view('chef.new-etudiant')->with(['idF' => $idF, 'groups' => $groups]);
    }
    public function store(Request $request) {

        $etudiant = new Etudiant;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->dateNaissance = $request->dateNaissance;
        $etudiant->addresse = $request->addresse>
        $etudiant->filiere_idF = $request->filiere_idF;
        $etudiant->group_idG = $request->group_idG;
        
        $etudiant->save();
        return redirect('chef-dept/etudiants/'. $request->filiere_idF);
    }
    public function chef_etudiants($idF, $idG){
        $filiere = Filiere::find($idF);
        $group = Group::find($idG);
        $etudiants = $group->etudiants;

        return view('chef.etudiants_group_liste')->with([
                'etudiants' =>$etudiants,
                'nomF' => $filiere->nomFiliere,
                'idF' => $idF,
                'nomGroup' => $group->nomGroup
            ]);
    }
}
