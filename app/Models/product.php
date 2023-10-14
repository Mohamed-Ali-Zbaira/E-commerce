<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    public function Category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
        
    }
    public function reviews(){
        return $this->hasMany(review::class, 'product_id', 'id');
    }
    public function lignecommande(){
        return $this->hasOne(lignecommande::class);
        
    }
}
