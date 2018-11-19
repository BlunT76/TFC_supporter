@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2>Espace photos supporters Bouyaka !!!!</h2>
    <form action="">
        @csrf
        <div class="row">
            @foreach ($photos as $photo)
            <div class="card col-3">
                <img class="card-img-top" src="{{$photo->url}}" alt="photo supporter">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#show{{$photo->id}}" title="Voir cette photo"><i class="far fa-eye"></i></button>
                    
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

                    <div class="form-check text-right">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Selectionner</label>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection
