<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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

    public function mentions($request)
    {
        $users = User::all();
        $mentions = [];
        foreach ($users as $user) {
            // ^ means string starts with @
            if (preg_match("/^@+{$user->username}\b/", $request)) {
                array_push($mentions, $user);
            }
            
            // \s means string starts with white space
            if (preg_match("/\s@+{$user->username}\b/", $request)) {
                array_push($mentions, $user);
            }
        }
        
        return $mentions;
    }
}
