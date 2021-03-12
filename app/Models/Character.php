<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function draftsman(){
        return $this->belongsTo(Draftsman::class);
    }

    public static function add($request){
        $character = new character;
        $character->name = $request->name;
        $character->publication_year = $request->publication_year;
        $character->affiliate_comic = $request->affiliate_comic;
        $character->draftsman_id = $request->draftsman_id;
        $character->publication_year = $request->publication_year;
        $character->save();
        return;
     }

     public static function modif($request, $id){
        $character = Character::find($id);
        $character->name = $request->name;
        $character->publication_year = $request->publication_year;
        $character->affiliate_comic = $request->affiliate_comic;
        $character->draftsman_id = $request->draftsman_id;
        $character->save();
     }
    
}
