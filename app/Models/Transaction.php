<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    protected $guarded = [];

    // SETIAP TRANSAKSI PUNYA SATU USER
    public function user(){
        return $this->belongsTo(User::class);
    }

    // SETIAP TRANSAKSI PUNYA SATU CAR
    public function car(){
        return $this->belongsTo(Car::class);
    }
}
