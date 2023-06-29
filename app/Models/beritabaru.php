<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beritabaru extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_name',
        'berita_location',
        'berita_desc',
        'event_cover',
    ];

    public function photoberitabaru()
    {
        return $this->hasMany(photoberitabaru::class);
    }
}
