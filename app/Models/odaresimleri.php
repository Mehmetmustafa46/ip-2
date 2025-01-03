<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odaresimleri extends Model
{
    use HasFactory;

    protected $table = 'odaresimleri';

    protected $fillable = [
        'OdaID',
        'ResimYolu'
    ];

    // İlişkiler
    public function oda()
    {
        return $this->belongsTo(odalar::class, 'OdaID');
    }
}
