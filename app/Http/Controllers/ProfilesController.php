<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

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

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', ValidationRule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'max:255', 'email', ValidationRule::unique('users')->ignore($user)],
            'avatar' => ['required', 'file'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        $attributes['avatar'] = request('avatar')->store('avatars');

        $user->update($attributes);

        return redirect($user->path());
    }
}
