<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public function pesanandetail()

    {
        return $this->hasMany(PesananDetail::class,'id_pesanan','id');
    }
     public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_id','id');
    }
    public function meja()
    {
        return $this->hasMany(meja::class,'meja_id','id');
    }
}
