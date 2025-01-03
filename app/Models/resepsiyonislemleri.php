<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepsiyonislemleri extends Model
{
    use HasFactory;

    protected $table = 'resepsiyonislemleri';

    protected $fillable = [
        'RezervasyonID',
        'IslemTarihi',
        'IslemTipi'
    ];

    // İlişkiler
    public function otelRezervasyon()
    {
        return $this->belongsTo(otelrezervasyonlar::class, 'RezervasyonID');
    }
}
