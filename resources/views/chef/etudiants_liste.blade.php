@extends("layouts.app")
@section("content")
<h3>{{$nomF }}</h3>
<div class="row">
  
    <div class="col col-md-2 col-sm-12">
        <div class="nav">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="/chef-dept/filieres/{{$idF}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Gérer groupes</a>
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="/chef-dept/etudiants/{{$idF}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Gèrer etudiants</a>
          </div>
        </div>
    </div>
    <div class="col col-md-10">
        <div class="mb-4">
            <a href="/chef-dept/new-etudiant/{{$idF}}" style="color:#ffffff" class="btn btn-info">Ajouter un étudiant</a>
        </div>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Date Naissance</th>
            <th scope="col">Addresse</th>
            <th scope="col">Filiere</th>
            <th scope="col">Groupe</th>

          </tr>
        </thead>
        <tbody>
          @foreach($etudiants as $etudiants)
            <tr>
              <td>{{$etudiants->idE}}</td>
              <td>{{$etudiants->nom}}</td>
              <td>{{$etudiants->prenom}}</td>
              <td>{{$etudiants->dateNaissance}}</td>
              <td>{{$etudiants->addresse}}</td>
              <td>{{$etudiants->filiere->nomFiliere}}</td>
              <td>{{$etudiants->group->nomGroup}}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
</div>
</div>
@endsection