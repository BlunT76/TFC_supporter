@extends ('layouts.app')

@section ('content')
<div class="container-fluid">
  <div class="text-center">
    <h1>Nouveau joueur</h1>
  </div>
  <div class="col-xs-12 col-md-6 mx-auto">
    <form method="POST" action="{{ route ('players_update', $res->id)}}">
        @csrf

      <div class="form-group">
        <label for="firstname">Nom</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $res->lastname }}" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="lastname">Prénom</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $res->firstname }}" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="number">Numéro</label>
        <input type="number" class="form-control" id="number" name="number" value="{{ $res->number }}" required pattern="\d*" min="1" max="99">
      </div>
      <div class="form-group">
        <label for="poste">Poste</label>
        <input type="text" class="form-control" id="poste" name="position" value="{{ $res->position }}" required maxlength="50">
      </div>
      <div class="form-group">
        <label for="photo">Photo</label>
        <input type="url" class="form-control" id="photo" name="portrait" value="{{ $res->portrait }}" required maxlength="255">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btnTfc" title="Modifier le joueur">Modifier</button>
      </div>
    </form>
  </div>
</div>

@endsection