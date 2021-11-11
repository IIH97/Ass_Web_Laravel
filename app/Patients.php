<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    public $table = "labs";

    protected $fillable = [
        'name','dob','gender','phone','email','medtest','res'
    ];
}
