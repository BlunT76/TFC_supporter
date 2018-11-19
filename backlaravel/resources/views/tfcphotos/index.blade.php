@extends('layouts.app')

@section('content')

<div class="container-fluid">

<h2>Espace photos supporters Bouyaka !!!!</h2>
<div class="row">
@foreach ($photos as $photo)
<div class="card col-3">
  <img class="card-img-top" src="{{$photo->url}}" alt="photo supporter">
  <div class="card-body">
    <a href="{{route('photos_show', $photo->id)}}" class="btn btn-primary">Voir cette photo</a>
  </div>
</div>
@endforeach
</div>
</div>
@endsection