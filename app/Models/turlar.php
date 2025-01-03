<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turlar extends Model
{
    use HasFactory;

    protected $table = 'turlar';

    protected $fillable = [
        'SeyahatID',
        'TurAdi',
        'Kapasite',
        'Fiyat'
    ];

    // İlişkiler
    public function seyahat()
    {
        return $this->belongsTo(seyahatlar::class, 'SeyahatID');
    }

    public function seyahatRezervasyonlar()
    {
        return $this->hasMany(seyahatrezervasyonlar::class, 'TurID');
    }

    public function turDuraklari()
    {
        return $this->hasMany(turduraklari::class, 'TurID');
    }

    public function turRehberAtama()
    {
        return $this->hasMany(turrehberatama::class, 'TurID');
    }
}
