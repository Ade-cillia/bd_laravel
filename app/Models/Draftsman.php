<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Draftsman extends Model
{
    public function characters(){
        return $this->hasMany(Comic::class);
    }
    
}
