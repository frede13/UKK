<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function kategori()
    {
        return $this->belongsTo(Karegori::class, 'kategori_id', 'id');
    }

    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class,'menu_id','id');
    }
}
