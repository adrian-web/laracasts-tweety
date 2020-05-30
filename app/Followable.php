<?php

namespace App;

trait Followable 
{
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    public function toggleFollow(User $user)
    {
        $this->follows()->toggle($user);   
    }

    public function follows()
    {       
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
    public function following(User $user)
    {
        // follows creates collection of all database records - be careful
        // return $this->follows->contains($user); 

        // it's better because it scans records one by one?
        return $this->follows()->where('following_user_id', $user->id)->exists(); 

        
    }
}