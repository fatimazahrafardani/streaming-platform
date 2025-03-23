<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Live_stream extends Model
{

    use HasFactory;

    protected $fillable = ['title', 'url', 'user_id', 'viewers_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
