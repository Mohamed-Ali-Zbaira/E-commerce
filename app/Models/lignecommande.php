<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lignecommande extends Model
{
    use HasFactory;
    public function commande(){
        return $this->belongsTo (commandes::class, 'commande_id', 'id');
    }
    public function product(){
        return $this->belongsTo(product::class);
    }
}
