<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        current_user()->toggleFollow($user);

        if (current_user()->following($user)) {
            return back()->with('success', 'You followed ' . $user->name . '!');
        }

        return back()->with('success', 'You unfollowed ' . $user->name . '!');
    }
}
