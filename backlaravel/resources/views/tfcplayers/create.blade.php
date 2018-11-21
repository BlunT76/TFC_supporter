@extends ('layouts.app')

@section ('content')
<div class="container-fluid">
  <div class="text-center">
    <h1>Nouveau joueur</h1>
  </div>
  <div class="col-xs-12 col-md-6 mx-auto">
    <form method="POST" action="{{ route('players_store') }}">
      @csrf
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrez le prénom" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Entrez le nom" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="number">Numéro</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="Entrez le numéro du joueur" required pattern="\d*" min="1" max="99">
      </div>
      <div class="form-group">
        <label for="poste">Poste</label>
        <select class="form-control" id="poste" name="position" required>
          <option selected disabled hidden>Choisissez un poste</option>
          <option value="Gardien">Gardien</option>
          <option value="Défenseur">Défenseur</option>
          <option value="Milieu">Milieu</option>
          <option value="Attaquant">Attaquant</option>
        </select>
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="url" class="form-control" id="photo" name="portrait" placeholder="Entrez l'url de la photo du joueur" required maxlength="255">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btnTfc" title="Créer un joueur">Envoyer</button>
      </div>
    </form>
  </div>
</div>

@endsection