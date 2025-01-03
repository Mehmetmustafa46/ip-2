<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seyahatulasim extends Model
{
    use HasFactory;

    protected $table = 'seyahatulasim';

    protected $fillable = [
        'SeyahatID',
        'UlasimTipi',
        'Fiyat'
    ];

    // İlişkiler
    public function seyahat()
    {
        return $this->belongsTo(seyahatlar::class, 'SeyahatID');
    }
}
