@extends('layouts.app')
@section('content')
    @if (count($groups) == 0)   
        <h4>Aucun group n'est crée dans cette filiere</h4>
    @else
        @foreach ($groups as $group)
        <div class="list-group">
            <a href="groups/{{$group->idG}}" class="list-group-item list-group-item-action">
                {{$group->nomGroup}}
            </a>
        </div>
        @endforeach
    @endif
@endsection