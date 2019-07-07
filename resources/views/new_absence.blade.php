@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('new_absence')}}">
        @csrf
        <div class="form-group row">
            <label for="heures" class="col-md-4 col-form-label text-md-right">Nombre d'heures </label>

            <div class="col-md-6">
                <input id="heures" type="number" class="form-control" name="heures" value="0" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="date_absence" class="col-md-4 col-form-label text-md-right">Date d'absence </label>

            <div class="col-md-6">
                <input class="form-control" type="date" id="date_absence" name="date_absence" />
            </div>
        </div>
        <div class="form-group row">
                <label for="module_id" name="module_id" class="col-md-4 col-form-label text-md-right">Modules </label>
    
                <div class="col-md-6">
                    <select class="custom-select" id="module_id" name="module_id">
                        <option value="-1">Selectionner le module</option>
                        @if (count($modules ) != 0)
                            @foreach ($modules as $module)
                                <option value="{{$module->idM}}">{{$module->nomModule}}</option>
                            @endforeach
                            
                        @endif
                    </select>
                </div>
            </div>
            <input type="hidden" name="etudiant_id" value="{{$idE}}">
            <div class="form-group row">
                <div class="offset-md-4 col-md-6">
                    <input class="btn btn-primary" type="submit" value="Confirmer" />
                </div>
            </div>
    </form>
    <script>
        $('.datepicker').datepicker();

    </script>
@endsection