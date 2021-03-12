<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Draftsman;
use App\Models\Character;

class DraftsmanController extends Controller
{
    public static function delete($id){
        $characters = Character::where("draftsman_id", "1")->get();
        foreach($characters as $character){
            $character->draftsman_id = 0;
            $character->save();
        }
        Draftsman::destroy($id);
        return redirect('/draftsmanList');
    }
    public static function add(Request $request){
        Draftsman::add($request);
        return redirect('/draftsmanAdd');
    }
    public static function modif(Request $request, $id){
        Draftsman::modif($request, $id);
        return redirect('/draftsmanList');
    }
}
