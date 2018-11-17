@extends('layouts.app')

@section('content')

<h1>TFC BOUYAKA !!</h1>

<a href="{{route('players_create')}}" type="button" class="btn btn-primary">Nouveau joueur</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Joueur</th>
      <th scope="col">Numéro</th>
      <th scope="col">Poste</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($players as $player)
    <tr>
      <td>{{ $player->firstname }} {{ $player->lastname}}</td>
      <td>{{ $player->number }}</td>
      <td>{{ $player->position }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection