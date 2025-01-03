<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turduraklari extends Model
{
    use HasFactory;

    protected $table = 'turduraklari';

    protected $fillable = [
        'TurID',
        'DurakAdi',
        'Aciklama'
    ];

    // İlişkiler
    public function tur()
    {
        return $this->belongsTo(turlar::class, 'TurID');
    }
}
