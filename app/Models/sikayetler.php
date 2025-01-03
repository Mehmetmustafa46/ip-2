<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sikayetler extends Model
{
    use HasFactory;

    protected $table = 'sikayetler';

    protected $fillable = [
        'MusteriID',
        'SikayetMetni',
        'Tarih'
    ];

    // İlişkiler
    public function musteri()
    {
        return $this->belongsTo(musteriler::class, 'MusteriID');
    }
}
