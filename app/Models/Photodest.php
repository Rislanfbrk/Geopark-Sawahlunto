<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photodest extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'destphoto',
    ];
    public function destinations()
    {
        return $this->belongsTo(destination::class);
    }
}
