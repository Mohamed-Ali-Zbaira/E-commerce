<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;

class review extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->BelongsTo(User::class, 'user_id', 'id');
    }
    public function products(){
        return $this->belongsTo(product::class, 'product_id', 'id');
    }
 }
