@extends('layouts.app')
@section('content')

    <h3>Nouveau Etudiant</h3>
    <form method="post" action="{{route('new_etudiant')}}">
        @csrf
        <div class="form-group row">
            <label for="nom" class="col-md-4 col-form-label text-md-right">Nom </label>

            <div class="col-md-6">
                <input id="nom" name="nom" type="text" class="form-control"  required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom </label>

            <div class="col-md-6">
                <input id="prenom" name="prenom" type="text" class="form-control" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="dateNaissance" class="col-md-4 col-form-label text-md-right">Date Naissance </label>

            <div class="col-md-6">
                <input id="dateNaissance" name="dateNaissance" type="date" class="form-control"  required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="addresse" class="col-md-4 col-form-label text-md-right">Addresse </label>

            <div class="col-md-6">
                <input id="addresse" name="addresse" type="text" class="form-control"  required autofocus>
            </div>
        </div>


        <div class="col-md-6 offset-md-4">
                                
                <div class="input-group-prepend">
                    <label class="input-group-text" for="group_idG">Group</label>
                </div>
                <select id="group_idG" class="custom-select" name="group_idG" id="group_idG">
                    @foreach($groups as $group)
                        <option value="{{$group->idG}}">{{$group->nomGroup}}</option>
                    @endforeach
                </select>
        
            </div>
        
        <input type="hidden" name="filiere_idF" value="{{$idF}}">
        <input type="submit" class="btn btn-primary" value="Sauvegarder">
    </form>

@endsection