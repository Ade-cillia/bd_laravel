@extends('layouts.layouts')

@section('title', "Modification d'un personnage")

@section('content')
    <h1 class="title">Modification d'un personnage</h1>
    <form action="/modifCharacter/{{$character->id}}" method="POST">
        @csrf
        <div class="list">
            <div class="characterModif">
                <div>
                    <div class="leftPartInfo">
                        <p>Nom du personnage :</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="text" value="{{$character->name}}" name='name'>
                    </div>  
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>année de création :</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="number" value="{{$character->publication_year}}" name='publication_year'>
                    </div>    
                </div> 
                <div>
                    <div class="leftPartInfo">
                        <p>On le retrouve dans</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkGenres">
                            <input class="input" type="text" value="{{$character->affiliate_comic}}" name='affiliate_comic'>
                        </div> 
                    </div>    
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>Dessinateur</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkGenres">
                            <select name="draftsman_id" id="author" required>
                                
                                <option value="{{$character->draftsman_id}}">{{ isset($character->draftsman->name) ? $character->draftsman->name : '⚠Inconnus⚠' }}</option>
                                @foreach ($draftsmen as $draftsman)
                                    <option value="{{$draftsman->id}}">{{$draftsman->name}}</option>
                                @endforeach
                            </select>
                            
                        </div> 
                    </div>    
                </div>
            </div>
        </div>
        <div class="divButton">
            <button type="submit" name="save">Sauvegarder</button>
        </div>
    </form>
    <form class="divButton" action="/deleteCharacter/{{$character->id}}" method="post">
        @csrf
        <button type="submit" name="delete">Supprimer</button>
    </form>
@endsection