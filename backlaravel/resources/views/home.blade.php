@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="font-weight-bold colorTfcBis">Bienvenue sur le site Admin de l'application TFC
                        Supporters</h1>
                </div>
                <div class="card-body text-center">
                    <img src="images/tfc.png" alt="Logo TFC">
                </div>
                <div class="card-footer colorTfc text-center">
                    <ul class="list-group">
                        <li class="list-group-item">L'onglet <a href="{{ route('players_index') }}">"Les joueurs du
                                TFC"</a> permet d'ajouter, modifier ou supprimer des joueurs du TFC.</li>
                        <li class="list-group-item">L'onglet <a href="{{ route('photos_index') }}">"Les photos des
                                supporters"</a> permet d'accéder aux photos des supporters, les selectionner pour le
                            top et supprimer celles qui restent.</li>
                        <li class="list-group-item">L'onglet <a href="{{ route('top_index') }}">"Le top photo"</a>
                            permet de visualiser les photos des supporters selectionnées et les supprimer.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
