<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];
    // SETIAP CAR MEMPUNYAI BANYAK TRANSAKSI
    public function transaction(){
        return $this->hasMany(transaction::class);
    }
}
