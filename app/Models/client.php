<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    public function client()
    {

        return $this->belongsTo(user::class, 'crm_id');
    }

    public function citys()
    {

        return $this->belongsTo(city::class, 'city_id');
    }

    public function dist()
    {

        return $this->belongsTo(District::class, 'district_id');
    }
    public function state()
    {

        return $this->belongsTo(State::class, 'state_id');
    }
    function use () {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function c_branch()
    {
        return $this->belongsTo(client_location::class, 'client_branch');
    }
    
    
}