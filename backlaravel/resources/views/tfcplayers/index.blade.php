@extends('layouts.app')

@section('content')
<div class="text-center mt-4">
    <h1 class=" font-weight-bold colorTfcBis">JOUEURS DU TFC</h1>
</div>
<!-- Bouton pour ajouter un nouveau joueur du TFC -->
<div class="mb-5 ml-4">
    <a href="{{route('players_create')}}" type="button" class="btn btn-primary" title="Ajouter un nouveau joueur"><i
            class="fas fa-plus mr-2"></i>Nouveau joueur</a>
</div>
<!-- Affichage tableau de tout les joueurs du TFC -->
<table class="table table-striped mb-5">
    <thead class="theadTfc">
        <tr>
            <th scope="col">Joueur</th>
            <th scope="col">Numéro</th>
            <th scope="col">Poste</th>
            <th scope="col" class="colorTfc">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($players as $player)
        <tr>
            <td>{{ $player->firstname }} {{ $player->lastname}}</td>
            <td>{{ $player->number }}</td>
            <td>{{ $player->position }}</td>
            <!-- Button et lien pour l'édition du joueur -->
            <td class="text-right">
                <a href="{{route('players_edit', $player->id)}}" type="button" class="btn btnTfc" title="Modifier le joueur">Editer</a>
                <button type="button" title="Supprimer le joueur" class="btn btn-danger" data-toggle="modal"
                    data-target="#ok{{$player->id}}" aria-label="supprimer"><i class="fas fa-times"></i></button>
                <!-- Button suppression + Modal de confirmation de la suppression du joueur -->
                <div class="modal fade" id="ok{{$player->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger font-weight-bold">Suppression</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Voulez-vous vraiment supprimer {{$player->firstname}} {{$player->lastname}} ?</p>
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
