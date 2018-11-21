@extends ('layouts.app')

@section ('content')

<div class="text-center mt-4">
<h1 class="font-weight-bold colorTfcBis">TOP PHOTOS DES SUPPORTERS</h1>
</div>

@foreach($res as $game)

<div class="container-fluid my-5">
    <div class="text-center">
    <h2 class="font-weight-bold colorTfc">{{$game->hometeam}} VS {{$game->visitor}} du {{$game->day}}</h2>
    </div>
    <div class="row">

        @foreach($game->topphotos as $photo)
        <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="card my-2 shadow cardPhoto">
            <img class="card-img-top" src="{{$photo->url}}" alt="Top photo supporter {{$photo->id}} ">
            <div class="card-body">
                <button type="button" role="button" class="btn btnTfc" data-toggle="modal" aria-label="voir la photo" data-target="#show{{$photo->id}}"
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
                                <img src="{{$photo->url}}" alt="photo supporter {{$photo->id}}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" role="button" title="Supprimer le joueur" aria-label="supprimer" class="btn btn-danger" data-toggle="modal"
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
        </div>
        @endforeach
    </div>
</div>
@endforeach



@endsection
