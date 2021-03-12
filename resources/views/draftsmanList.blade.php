@extends('layouts.layouts')

@section('title', "Liste des dessinateurs")

@section('content')
    <h1 class="title">Liste des dessinateurs</h1>
    <div class="center">
        <div class="allComics">
            
            @foreach ($draftsmen as $draftsman)
                <div class="comic">
                    <p class="maxWidth">{{$draftsman->name}}</p>
                    <p class="maxWidth">Née en {{$draftsman->birth_year}}</p>
                    <p class="maxWidth">Nationalité: {{$draftsman->nationality}}</p>
                    <form action="/deleteDraftsman/{{$draftsman->id}}" method="post">
                        @csrf
                        <button class="buttonChar" type="submit" name="delete">Supprimer</button>
                    </form>
                    <form action="/modifDraftsmanPage/{{$draftsman->id}}" method="post">
                        @csrf
                        <button class="buttonChar" type="submit" name="modif">Modifier</button>
                    </form>
                
                    
                </div>
            @endforeach
        </div>
    </div>
    
@endsection