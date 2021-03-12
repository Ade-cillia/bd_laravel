@extends('layouts.layouts')

@section('title', "Modification d'un dessinateur")

@section('content')
    <h1 class="title">Modification d'un dessinateur</h1>
    <form action="/modifDraftsman/{{$character->id}}" method="post">
        @csrf
        <div class="list">
            <div class="characterModif">
                <div>
                    <div class="leftPartInfo">
                        <p>Nom du déssinateur :</p>
                    </div>
                    <div class="rightPartInfo">
                    <input class="input" type="text"  value="{{$draftsman->name}}" name='name'>
                    </div>  
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>Années de naissance</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="number" value="{{$draftsman->birth_year}}" name='birth_year'>
                    </div>    
                </div> 
                <div>
                    <div class="leftPartInfo">
                        <p>Nationalité</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkGenres">
                            <input class="input" type="text" value="{{$draftsman->nationality}}" name='nationality'>
                        </div> 
                    </div>    
                </div>
            </div>
        </div>
        <div class="divButton">
            <button type="submit" name="save">Sauvegarder</button>
        </div>
    </form>
@endsection