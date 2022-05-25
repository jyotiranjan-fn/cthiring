<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
    use HasFactory;
    public function c_branch()
    {
        return $this->belongsTo(client_location::class, 'client_branch');
    }
}