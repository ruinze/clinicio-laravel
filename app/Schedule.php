<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'doctor_id', 'patient_id', 'questionaire_result', 'flag',
    ];
}
