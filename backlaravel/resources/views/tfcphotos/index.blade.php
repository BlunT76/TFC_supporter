@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="text-center mt-4">
    <h1 class=" font-weight-bold colorTfcBis">ESPACE PHOTOS SUPPORTERS TFC</h1>
    </div>

    <div class="text-right my-3">
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" title="Supprimer toutes les photos">Effacer
        tout</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger font-weight-bold">Suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Voulez-vous vraiment supprimer toutes les photos ? <br>Cette action est irrémédiable.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" role="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="{{route('photos_destroy')}}" type="button" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>


    <form method="POST" action="{{route('photos_select')}}">
        @csrf
        <div class="row">
            @foreach ($photos as $photo)
            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="card my-2 shadow cardPhoto">
                <img class="card-img-top" src="{{$photo->url}}" alt="photo supporter {{$photo->id}}">
                <div class="card-body">
                    <button type="button" role="button" aria-label="voir la photo" class="btn btnTfc" data-toggle="modal" data-target="#show{{$photo->id}}"
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
                    <!-- CheckBox -->
                    <div class="form-check text-right">
                        <input type="checkbox" aria-label="selectionner" class="form-check-input" id="checkBox{{$photo->id}}" name="{{$photo->id}}" value="{{$photo->id}}" title="Selectionner pour le top photo">
                        <label class="form-check-label" for="checkBox{{$photo->id}}">Selectionner</label>
                    </div>
                </div>
            </div>
            </div>
            @endforeach
        </div>
        <div class="text-center my-4 col-xs-12 col-md-6 mx-auto">
            <button type="submit" class="btn btn-primary btn-lg btn-block" title="Enregistrer les photos selectionnées">Envoyer</button>
        </div>
    </form>

</div>
@endsection
