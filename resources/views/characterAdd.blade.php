@extends('layouts.layouts')

@section('title', "Ajout d'un personnage")

@section('content')
    <h1 class="title">Ajout d'un personnage</h1>
    <form action="/addCharacter" method="post">
        @csrf
        <div class="list">
            <div class="characterModif">
                <div>
                    <div class="leftPartInfo">
                        <p>Nom du personnage :</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="text"  name='name'>
                    </div>  
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>année de création :</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="number"  name='publication_year'>
                    </div>    
                </div> 
                <div>
                    <div class="leftPartInfo">
                        <p>On le retrouve dans</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkGenres">
                            <input class="input" type="text" name='affiliate_comic'>
                        </div> 
                    </div>    
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>Dessinateur</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkDraftsman">
                            <select name="draftsman_id" id="author" required>
                                <option value="">-- dessinateur / dessinatrice --</option>
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
            <button type="submit" name="add">Ajouter</button>
        </div>
    </form>
@endsection