<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'state', 'datepicker', 'phone', 'guest', 'email', 'subject'
    ];
}
