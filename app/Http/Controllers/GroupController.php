<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Filiere;


class GroupController extends Controller
{
    public function index($idG) {

        $group = Group::find($idG);
        

        return view('etudiants')->with(['etudiants' => $group->etudiants, 'idF' => $group->filiere_idF]);
    }

    public function getGroups($idF) {
        $filiere = Filiere::find($idF);
        $groups = $filiere->groups;

        return view('chef.groups_liste')->with(['groups' => $groups, 'idF'=> $idF, 'nomF' => $filiere->nomFiliere]);
    }

    public function group_form($idF){
        return view('chef.new_group')->with('idF', $idF);
    }

    public function new(Request $request){
        $group = new Group;
        $group->nomGroup = $request->nomGroup;
        $group->filiere_idF = $request->filiere_idF;
        $group->save();

        return redirect('/chef-dept/filieres/' . $request->filiere_idF);
    }
}
