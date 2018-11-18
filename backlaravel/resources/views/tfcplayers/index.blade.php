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
      <td><a href="" type="button" class="btn btn-success" name="id" value= {{ $player-> id }}>Editer</a></td>
      <td><a href="" type="button" class="btn btn-danger" name="id" value= {{ $player-> id }}>Supprimer</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection