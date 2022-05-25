<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;
    public function quli()
    {
        return $this->belongsTo(Qualification::class, 'qualification');
    }
}
