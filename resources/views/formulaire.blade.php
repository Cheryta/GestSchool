@extends("layouts.master")

@section("contenu")

<h1 class="text-center text-primary p-3">FORMULAIRE D'INSCRIPTION </h1>
    <h3 class="text-center p-2">Veuillez remplir ce formulaire pour ajouter un nouveau étudiant !!!</h3>
    <div class="container">
        <div class="col-md-12 m-2 p-3">
            <form method="post" action="{{route('insertion')}}">
                @csrf
                <div class="mb-3">
                <label  class="form-label">NOM</label>
                <input type="text" class="form-control" name="nom" placeholder="Entrer le nom de l'étudiant">
                </div>
                <div class="mb-3">
                <label  class="form-label">PRENOM</label>
                <input type="text" class="form-control" name="prenom" placeholder="Entrer le prénom de l'étudiant">
                </div>
                <div class="mb-3">
                    <label  class="form-label">GENRE</label>
                    <input type="text" class="form-control" name="genre" placeholder="Genre">
                </div>
                <div class="mb-3">
                <label  class="form-label">AGE</label>
                <input type="number" class="form-control" name="age" placeholder="Entrer son age">
                </div>
                <div class="mb-3">
                <label  class="form-label">NUMERO DE TELEPHONE</label>
                <input type="number" class="form-control" name="telephone" placeholder="Entrer le numéro de téléphone">
                </div>
                <div class="mb-3">
                <label  class="form-label">ADRESSE</label>
                <input type="text" class="form-control" name="adresse" placeholder="Adresse de l'etudiant">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-danger btn-lg" value="valider">Enregistrer</button>
                    <button type="reset" class="btn btn-primary btn-lg">Annuler</button>
                </div>
            </form>
        </div>
    </div>
@endsection
