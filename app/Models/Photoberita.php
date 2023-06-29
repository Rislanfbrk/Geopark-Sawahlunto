<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photoberita extends Model
{
    use HasFactory;


    protected $fillable = [
        'berita_id',
        'beritaphoto',
    ];
    public function events()
    {
        return $this->belongsTo(berita::class);
    }
}
