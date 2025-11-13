<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'id',
        'fname',
        'lname',
        'created_At',	
        'updated_At'
    ];

    protected $table = 'customers';
}
