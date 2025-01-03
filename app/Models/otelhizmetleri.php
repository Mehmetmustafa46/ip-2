<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otelhizmetleri extends Model
{
    use HasFactory;

    protected $table = 'otelhizmetleri';

    protected $fillable = [
        'OtelID',
        'HizmetAdi',
        'Aciklama'
    ];

    // İlişkiler
    public function otel()
    {
        return $this->belongsTo(oteller::class, 'OtelID');
    }
}
