<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestInformation extends Model
{
    protected $fillable = [

            'programmes',
            'last_name',
            'first_name',
            'email',
            'title',
            'DateOfBirth',
            'nationality',
            'question'
    ];
}
