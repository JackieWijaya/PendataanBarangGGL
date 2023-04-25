<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    public function stok(){
        // one to many relationship
        // 1 produk memiliki banyak transaksi pembelian
        return $this->hasMany('App\Models\Stok');
    }
}