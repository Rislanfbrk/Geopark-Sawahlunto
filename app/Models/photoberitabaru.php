<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photoberitabaru extends Model
{
    use HasFactory;

    protected $fillable = [
        'berita_id',
        'beritaphoto',
    ];

    public function beritabaru()
    {
        return $this->belongsTo(beritabaru::class);
    }
}
