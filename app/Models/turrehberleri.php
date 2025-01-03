<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turrehberleri extends Model
{
    use HasFactory;

    protected $table = 'turrehberleri';

    protected $fillable = [
        'Ad',
        'Soyad',
        'Telefon',
        'Email'
    ];

    // İlişkiler
    public function turRehberAtama()
    {
        return $this->hasMany(turrehberatama::class, 'RehberID');
    }
}
