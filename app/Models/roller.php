<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roller extends Model
{
    use HasFactory;

    protected $table = 'roller';

    protected $fillable = [
        'RolAdi',
        'Aciklama'
    ];

    // İlişkiler
    public function kullanicilar()
    {
        return $this->hasMany(kullanici::class, 'RolID');
    }
}
