@extends('layouts.app')

@section('content')

<h1>Bouyaka le retour !!!</h1>
<a href="{{route('photos_index')}}" type="button" class="btn btn-success">Retour</a>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#select{{$photo->id}}">Selectionner</button>

          <!-- Modal -->
          <div class="modal fade" id="select{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Selectionner ??</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <p>Etes vous sur de vouloir selectionner cette photo pour le top 5 ?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <a href="{{route('photos_send', $photo->id)}}" type="button" class="btn btn-primary">Envoyer</a>
                </div>
              </div>
            </div>
          </div>

<div class="container-fluid text-center">
    <img src="{{$photo->url}}" alt="photo supporter" class="img-fluid">
</div>

@endsection