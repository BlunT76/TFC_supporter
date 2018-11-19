@extends('layouts.app')

@section('content')

<h1>TFC BOUYAKA !!</h1>

<a href="{{route('players_create')}}" type="button" class="btn btn-primary">Nouveau joueur</a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Joueur</th>
      <th scope="col">Numéro</th>
      <th scope="col">Poste</th>
      <th scope="col">Action</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      @foreach ($players as $player)
    <tr>
      <td>{{ $player->firstname }} {{ $player->lastname}}</td>
      <td>{{ $player->number }}</td>
      <td>{{ $player->position }}</td>
      <td><a href="{{route('players_edit', $player->id)}}" type="button" class="btn btn-success">Editer</a></td>
      <td>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ok{{$player->id}}">Supprimer</button>
          <!-- Modal -->
          <div class="modal fade" id="ok{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Supprimer ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p>Etes vous sur de vouloir supprimer {{$player->firstname}} {{$player->lastname}} ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <a href="{{route('players_destroy', $player->id)}}" type="button" class="btn btn-danger">Supprimer</a>
                </div>
              </div>
            </div>
          </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection