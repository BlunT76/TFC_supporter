@extends ('layouts.app')

@section ('content')
<form method="POST" action="{{ route ('players_update', $res->id)}}">
    @csrf

  <div class="form-group">
    <label for="firstname">Nom</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $res->lastname }}" required>
  </div>
  <div class="form-group">
    <label for="lastname">Prénom</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $res->firstname }}" required>
  </div>
  <div class="form-group">
    <label for="number">Numéro</label>
    <input type="number" class="form-control" id="number" name="number" value="{{ $res->number }}" required>
  </div>
  <div class="form-group">
    <label for="poste">Poste</label>
    <input type="text" class="form-control" id="poste" name="position" value="{{ $res->position }}" required>
  </div>
  <div class="form-group">
    <label for="photo">Photo</label>
    <input type="url" class="form-control" id="photo" name="portrait" value="{{ $res->portrait }}" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection