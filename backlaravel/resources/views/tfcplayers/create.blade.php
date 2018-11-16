@extends ('layouts.app')

@section ('content')
<form method="POST" action="{{ route('players_store') }}">
    @csrf
  <div class="form-group">
    <label for="firstname">Prénom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Entrez le prénom" required>
  </div>
  <div class="form-group">
    <label for="lastname">Nom</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Entrez le nom" required>
  </div>
  <div class="form-group">
    <label for="number">Numéro</label>
    <input type="number" class="form-control" id="number" name="number" placeholder="Entrez le numéro du joueur" required>
  </div>
  <div class="form-group">
    <label for="poste">Poste</label>
    <input type="text" class="form-control" id="poste" name="position" placeholder="Entrez le poste du joueur" required>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="url" class="form-control" id="photo" name="portrait" placeholder="Entrez l'url de la photo du joueur" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection