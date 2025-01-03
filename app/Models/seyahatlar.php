<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seyahatlar extends Model
{
    use HasFactory;

    protected $table = 'seyahatler';

    protected $fillable = [
        'SeyahatAdi',
        'BaslangicTarihi',
        'BitisTarihi',
        'Bolge',
        'Aciklama'
    ];

    // İlişkiler
    public function seyahatResimleri()
    {
        return $this->hasMany(seyahatresimleri::class, 'SeyahatID');
    }

    public function seyahatUlasim()
    {
        return $this->hasMany(seyahatulasim::class, 'SeyahatID');
    }

    public function turlar()
    {
        return $this->hasMany(turlar::class, 'SeyahatID');
    }
}
