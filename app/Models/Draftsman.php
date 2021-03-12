<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Draftsman extends Model
{
    public function characters(){
        return $this->hasMany(Character::class);
    }

    public static function add($request){
        $draftsman = new Draftsman;
        $draftsman->name = $request->name;
        $draftsman->birth_year = $request->birth_year;
        $draftsman->nationality = $request->nationality;
        $draftsman->save();
        return;
     }

     public static function modif($request, $id){
        $draftsman = Draftsman::find($id);
        $draftsman->name = $request->name;
        $draftsman->birth_year = $request->birth_year;
        $draftsman->nationality = $request->nationality;
        $draftsman->save();
     }
}
