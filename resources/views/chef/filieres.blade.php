@extends('layouts.app')

@section('content')


<h1>Filieres</h1>
    
    <div class="col-md-10">
        <div class="list-group">
            @if(count($filieres) != 0)

                @foreach ($filieres as $filiere)
                    <a href="filieres/{{$filiere->idF}}" class="list-group-item list-group-item-action">
                        {{$filiere->nomFiliere}}
                    </a>
                    
                @endforeach
            @else
                <h4 > Aucune filiere dans votre departement </h4>
            @endif
            
        </div>
    </div>
@endsection