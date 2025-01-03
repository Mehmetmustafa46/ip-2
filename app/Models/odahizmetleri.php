<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odahizmetleri extends Model
{
    use HasFactory;

    protected $table = 'odahizmetleri';

    protected $fillable = [
        'OdaID',
        'HizmetAdi',
        'Aciklama'
    ];

    // İlişkiler
    public function oda()
    {
        return $this->belongsTo(odalar::class, 'OdaID');
    }
}
