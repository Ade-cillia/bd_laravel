<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Draftsman;

class NavController extends Controller
{
    public function index(){
        return view('home');
    }
    public function characterList(){
        $characters = Character::all()->sortBy('affiliate_comic');
        return view('characterList',['characters' => $characters]);
    }
    public function draftsmanList(){
        $draftsmen = Draftsman::all()->sortBy('name');
        return view('draftsmanList',['draftsmen' => $draftsmen]);
    }

    
    public function characterModif($id){
        $character = Character::find($id);
        $draftsmen = Draftsman::all()->sortBy('name');
        return view('characterModif',['character' => $character, 'draftsmen' => $draftsmen]);
    }
    public function draftsmanModif($id){
        $draftsman = Draftsman::find($id);
        return view('draftsmanModif',['draftsman' => $draftsman]);
    }

    
    public function characterAdd(){
        $draftsmen = Draftsman::all()->sortBy('name');
        return view('characterAdd',['draftsmen' => $draftsmen]);
    }
    public function draftsmanAdd(){
        return view('draftsmanAdd');
    }
    
}
