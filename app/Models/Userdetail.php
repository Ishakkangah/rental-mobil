<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{

    
    use HasFactory;

    protected $guarded = [];
    // SETIP USER-DETAIL MEMILIKI SATU USER
    public function user(){
        return $this->belongsTo(User::class);
    }
}
