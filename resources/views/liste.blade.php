@extends("layouts.master")

@section("contenu")
<h1 class="text-center text-primary p-3">LISTE DES ETUDIANTS </h1>
    <div>
        <div class="d-flex justify-content-end m-4">
            <a href="{{ route('formulaire') }}" class="btn btn-primary"> Ajouter un nouvel etudiant</a>
        </div>
        <table class="table m-3 ">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">NOM</th>
            <th scope="col">PRENOM</th>
            <th scope="col">GENRE</th>
            <th scope="col">AGE</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">ADRESSE</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
            <th scope="row">{{$etudiant->id}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->genre}}</td>
            <td>{{$etudiant->age}}</td>
            <td>{{$etudiant->telephone}}</td>
            <td>{{$etudiant->adresse}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>

@endsection

