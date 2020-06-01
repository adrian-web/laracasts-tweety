<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use Likable;

    protected $guarded = [];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/' . $value);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
