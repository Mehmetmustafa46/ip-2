<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seyahatresimleri extends Model
{
    use HasFactory;

    protected $table = 'seyahatresimleri';

    protected $fillable = [
        'SeyahatID',
        'ResimYolu'
    ];

    // İlişkiler
    public function seyahat()
    {
        return $this->belongsTo(seyahatlar::class, 'SeyahatID');
    }
}
