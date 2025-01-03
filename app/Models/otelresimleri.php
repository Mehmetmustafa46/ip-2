<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class otelresimleri extends Model
{
    use HasFactory;

    protected $table = 'otelresimleri';

    protected $fillable = [
        'OtelID',
        'ResimYolu'
    ];

    // İlişkiler
    public function otel()
    {
        return $this->belongsTo(oteller::class, 'OtelID');
    }
}
