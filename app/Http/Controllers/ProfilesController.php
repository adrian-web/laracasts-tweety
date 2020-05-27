<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        // possible to use in replace of policy
        // abort_if($user->isNot(current_user()), 404);

        // authorization with policy
        // below controller method instead of middleware in routes
        // $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }
}
