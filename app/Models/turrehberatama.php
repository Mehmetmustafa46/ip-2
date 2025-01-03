<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turrehberatama extends Model
{
    use HasFactory;

    protected $table = 'turrehberatama';

    protected $fillable = [
        'TurID',
        'RehberID',
        'AtamaTarihi'
    ];

    // İlişkiler
    public function tur()
    {
        return $this->belongsTo(turlar::class, 'TurID');
    }

    public function turRehberi()
    {
        return $this->belongsTo(turrehberleri::class, 'RehberID');
    }
}
