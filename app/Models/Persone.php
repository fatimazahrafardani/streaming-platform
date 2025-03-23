<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persone extends Model
{
    //
    
    protected $fillable = [
        'name', 'email', 'password', 'role', 'abonnement_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function liveStreams()
    {
        return $this->hasMany(LiveStream::class);
    }
}
