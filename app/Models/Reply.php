<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
