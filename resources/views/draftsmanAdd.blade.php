@extends('layouts.layouts')

@section('title', "Ajout d'un dessinateur")

@section('content')
    <h1 class="title">Ajout d'un dessinateur</h1>
    <form action="/addDraftsman" method="post">
        @csrf
        <div class="list">
            <div class="characterModif">
                <div>
                    <div class="leftPartInfo">
                        <p>Nom du déssinateur :</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="text"  name='name'>
                    </div>  
                </div>
                <div>
                    <div class="leftPartInfo">
                        <p>Années de naissance</p>
                    </div>
                    <div class="rightPartInfo">
                        <input class="input" type="number"  name='birth_year'>
                    </div>    
                </div> 
                <div>
                    <div class="leftPartInfo">
                        <p>Nationalité</p>
                    </div>
                    <div class="rightPartInfo">
                        <div class="checkGenres">
                            <input class="input" type="text" name='nationality'>
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