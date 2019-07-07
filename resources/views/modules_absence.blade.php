@extends('layouts.app')

@section('content')
<h1>Modules</h1>
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Module</th>
            <th scope="col">Heures Total</th>
            <th scope="col">Action</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($modules as $module)
            <tr>
                <td>{{$module->idM}}</td>
                <td>{{$module->nomModule}}</td>
                <td>{{$module->tot}}</td>
                <td><a href="/absences/list/{{$module->idM}}/{{$idE}}">Details</a></td>
            </tr>
            
            @endforeach
        </tbody>
</table>
@endsection