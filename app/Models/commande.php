<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    //use HasFactory;
    public function lignecommandes(){
        return $this->hasMany(lignecommande::class,'commande_id','id');
    }
    public function client(){
        return $this->belongsTo(user::class, 'client_id', 'id');
    }
    
    
}
