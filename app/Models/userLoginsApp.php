<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userLoginsApp extends Model
{
    protected $fillable = [
        'username',
        'email',
        'password',
    ];
}
