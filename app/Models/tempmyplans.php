<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempmyplans extends Model
{
    use HasFactory;
    
    public function plan()
    {

        return $this->belongsTo(position::class, 'position_id');
    }
     public function plan2()
    {

        return $this->belongsTo(client::class, 'client_name');
    }
}
