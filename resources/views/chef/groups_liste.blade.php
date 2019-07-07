@extends('layouts.app')
@section('content')

<h3>{{$nomF}}</h3>
<div class="row">
    <div class="col col-md-2 col-sm-12">
        <div class="nav">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="/chef-dept/filieres/{{$idF}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gérer groupes</a>
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="/chef-dept/etudiants/{{$idF}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Gèrer etudiants</a>
                    </div>
        </div>
    </div>

    <div class=" col col-md-10 col-sm-12">
        <form method="post" action="{{route('new_group')}}">
            @csrf
            <div class="input-group mb-3 col-md-6">
                <input type="text" name="nomGroup" class="form-control" placeholder="Nom de group" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                <input type="submit" class="btn btn-outline-secondary" type="button" value="Ajouter Group">
                </div>
                <input type="hidden" name="filiere_idF" value="{{$idF}}"/>
            </div>


        </form>
            @if (count($groups) == 0)   
                <h4>Aucun group n'est crée dans cette filiere</h4>
            @else
                @foreach ($groups as $group)
                <div class="list-group">
                    <a href="/chef-dept/filieres/{{$idF}}/groups/{{$group->idG}}" class="list-group-item list-group-item-action">
                        {{$group->nomGroup}}
                    </a>
                </div>
                @endforeach
            @endif
    </div>
</div>
@endsection