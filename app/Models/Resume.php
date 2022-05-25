<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Resume extends Model
// {
//     use HasFactory;
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $table = 'resume';

    // public function client_name()
    // {
    //     return $this->belongsTo(Position::class, 'client_name');
    // }

    public function view_nameofclient()
    {
        return $this->belongsTo(client::class, 'client_id');
    }

    public function jobname()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function username_of_resume()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}