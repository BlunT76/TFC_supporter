@extends ('layouts.app')

@section ('content')
<div class="container-fluid mb-5">
  <div class="col-xs-12 col-md-6 mx-auto formTfc shadow-lg">
    <div class="text-center pt-3 text-white">
      <h1>Modifier le joueur</h1>
    </div> 
    <form method="POST" action="{{ route ('players_update', $res->id)}}" class="p-3">
        @csrf
<!-- Formulaire d'édition du joueur avec ses informations -->
      <div class="form-group">
        <label for="firstname">Nom :</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $res->lastname }}" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="lastname">Prénom :</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $res->firstname }}" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="number">Numéro :</label>
        <input type="number" class="form-control" id="number" name="number" value="{{ $res->number }}" required pattern="\d*" min="1" max="99">
      </div>
      <div class="form-group">
        <label for="poste">Poste :</label>
        <select class="form-control" id="poste" name="position" required>
          <option value="Gardien"
              @if ( $res->position  == 'Gardien')
                {{'selected'}}
              @endif
          >Gardien</option>
          <option value="Défenseur"
              @if ($res->position  == 'Défenseur')
                {{'selected'}}
              @endif
          >Défenseur</option>
          <option value="Milieu"
              @if ($res->position == 'Milieu')
                {{'selected'}}
              @endif
          >Milieu</option>
          <option value="Attaquant"
              @if ($res->position  == 'Attaquant')
                {{'selected'}}
              @endif
          >Attaquant</option>
        </select>
      </div>
      <div class="form-group">
        <label for="photo">Photo :</label>
        <input type="url" class="form-control" id="photo" name="portrait" value="{{ $res->portrait }}" required maxlength="255">
      </div>
      <div class="text-center pt-3">
        <button type="submit" class="btn btnTfc" title="Modifier le joueur">Modifier</button>
      </div>
    </form>
  </div>
</div>

@endsection