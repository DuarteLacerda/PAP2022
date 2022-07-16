<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotosEventos extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    /* public function eventos()
    {
        return $this->belongsTo(Eventos::class);
    } */
}
