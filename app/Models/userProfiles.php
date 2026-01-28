<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class userProfiles extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'username',
        'full_name',
        'email',
        'phone_number',
        'bio',
        'profile_picture',
        'website',
        'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
