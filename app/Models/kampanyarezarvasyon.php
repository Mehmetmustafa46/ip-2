<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kampanyarezarvasyon extends Model
{
    use HasFactory;

    protected $table = 'kampanyarezervasyon';

    protected $fillable = [
        'KampanyaID',
        'RezervasyonID'
    ];

    // İlişkiler
    public function kampanya()
    {
        return $this->belongsTo(kampanyalar::class, 'KampanyaID');
    }

    public function rezervasyon()
    {
        return $this->belongsTo(rezervasyonlar::class, 'RezervasyonID');
    }
}
