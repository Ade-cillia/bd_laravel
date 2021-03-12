<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class NavController extends Controller
{
    public function index(){
        return view('home');
    }
    public function characterList(){
        $characters = Character::all();
        return view('characterList',['comics' => $characters]);
    }
}
