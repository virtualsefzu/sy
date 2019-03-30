<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'user';
    protected $fillable = [
        'email', 'password',
    ];
}
