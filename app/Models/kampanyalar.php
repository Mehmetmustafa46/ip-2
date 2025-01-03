<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampanyalar extends Model
{

    use HasFactory;

    protected $table = 'kampanyalar';

    protected $fillable = [
        'KampanyaAdi',
        'BaslangicTarihi',
        'BitisTarihi',
        'IndirimOrani',
        'KampanyaTipi',
        'Aciklama'
    ];
    public function kampanyaRezervasyonlar()
    {
        return $this->hasMany(kampanyarezarvasyon::class, 'KampanyaID');
    }
}
