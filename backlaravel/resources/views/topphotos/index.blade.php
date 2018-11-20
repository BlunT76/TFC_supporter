@extends ('layouts.app')

@section ('content')

<h1>Top bouyaka !!</h1>

@foreach($res as $game)

<div class="container-fluid">
    <h3>{{$game->hometeam}} VS {{$game->visitor}} du {{$game->day}}</h3>
    <div class="row">

        @foreach($game->topphotos as $photo)

        <div class="card col-3">
            <img class="card-img-top" src="{{$photo->url}}" alt="Top photo supporter">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#show{{$photo->id}}"
                    title="Voir cette photo"><i class="far fa-eye"></i></button>

                <!-- Modal -->
                <div class="modal fade" id="show{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{$photo->url}}" alt="photo supporter" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" title="Supprimer le joueur" class="btn btn-danger" data-toggle="modal"
                    data-target="#ok{{$photo->id}}"><i class="fas fa-times"></i></button>
                <!-- Modal -->
                <div class="modal fade" id="ok{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                <p>Voulez-vous vraiment supprimer cette photo ? <br>Cette action est irrémédiable.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <a href="{{route('top_destroy', $photo->id)}}" type="button" class="btn btn-danger">Supprimer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>
@endforeach



@endsection
