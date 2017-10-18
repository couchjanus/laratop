<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'telephone', 'gender', 'birthday', 'image', 'addressline1', 'addressline2', 'bio', 'postcode', 'country', 'user_id', 'twitter_username', 'github_username'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
