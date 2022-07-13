<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gruta extends Model
{
    use HasFactory;

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }
}
