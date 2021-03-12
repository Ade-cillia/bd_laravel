@extends('layouts.layouts')

@section('title', "Bandes dessinées")

@section('content')
    <h1 class="title">Liste des personnages de Bandes Dessinées</h1>
    <div class="center">
        <div class="allComics">
            
            @foreach ($comics as $comic)
                
                <div class="comic">
                    <p class="maxWidth">{{$comic->affiliate_comic}}</p>
                    <div>
                        <p class="maxWidth">{{$comic->name}} publié en {{$comic->publication_year}}</p>
                        <p class="maxWidth">Déssinateur/Déssinatrice: {{$comic->draftsman->name}}</p>
                    </div>
                    
                </div>
            @endforeach
        </div>
    </div>
    
@endsection