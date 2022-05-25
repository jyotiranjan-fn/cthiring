<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'position_id';

    public function client_na()
    {

        return $this->belongsTo(client::class, 'client_name');
    }

    public function client_crm()
    {

        return $this->belongsTo(User::class, 'crm');

    }

    public function client_requiter()
    {

        return $this->belongsTo(User::class, 'recruiters');

    }

    public function position_create()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
     public function pos_client_cont()
    {
        return $this->belongsTo(ClientContact::class, 'spoc_name');
    }
    public function qualification_title()
    {
        return $this->belongsTo(Qualification::class, 'qualification');
    }
     public function functional_pos()
    {
        return $this->belongsTo(FunctionalArea::class, 'functional_area');
    }
   

   

}