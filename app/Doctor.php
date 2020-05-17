<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'user_id', 'clinic_name', 'clinic_address', 'contact_number',
    ];
}
