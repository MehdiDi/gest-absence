@extends('layouts.app')
@section('content')
    @if (count($etudiants) == 0)
        <h4>Aucun étudiant dans cette filiere</h4>

    @else
        
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date Naissance</th>
                    <th scope="col">Addresse</th>
                    <th scope="col">Absence</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->idE}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->dateNaissance}}</td>
                        <td>{{$etudiant->addresse}}</td>
                        <td><a href="/absences/modules/{{$idF}}/{{$etudiant->idE}}">Voir</a></td>
                        <td><a href="/absences/new/{{$idF}}/{{$etudiant->idE}}">Ajouter</a></td>
                        
                        </tr>
                    
                    @endforeach
                </tbody>
        </table>
    @endif
@endsection