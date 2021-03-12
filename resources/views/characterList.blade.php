@extends('layouts.layouts')

@section('title', "Liste des personnages")

@section('content')
    <h1 class="title">Liste des personnages de Bandes Dessinées</h1>
    <div class="center">
        <div class="allComics">
            
            @foreach ($characters as $character)
                
                <div class="comic">
                    <p class="maxWidth">{{$character->name}}</p>
                    <p class="maxWidth">Crée en {{$character->publication_year}}</p>
                    <p class="maxWidth">On le retrouve dans {{$character->affiliate_comic}}</p>
                    <p class="maxWidth">
                        Déssinateur/Déssinatrice:
                        {{ isset($character->draftsman->name) ? $character->draftsman->name : '⚠Inconnus⚠' }}
                    </p>
                    <form action="/deleteCharacter/{{$character->id}}" method="post">
                        @csrf
                        <button class="buttonChar" type="submit" name="delete">Supprimer</button>
                    </form>
                    <form action="/characterModifPage/{{$character->id}}" method="post">
                        @csrf
                        <button class="buttonChar" type="submit" name="modif">Modifier</button>
                    </form>
                
                    
                </div>
            @endforeach
        </div>
    </div>
    
@endsection