<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function draftsman(){
        return $this->belongsTo(Draftsman::class);
    }
}
