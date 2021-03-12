<?php

namespace App\Http\Controllers;
use App\Models\Character;

use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public static function delete($id){
        Character::destroy($id);
        return redirect('/characterList');
    }
    public static function modif(Request $request, $id){
        Character::modif($request, $id);
        return redirect('/characterList');
    }
    public static function add(Request $request){
        Character::add($request);
        return redirect('/characterAdd');
    }
    
    
}
