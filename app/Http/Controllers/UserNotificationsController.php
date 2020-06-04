<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        return view('notifications.show', [
            'notifications' => current_user()->unreadNotifications
        ]);
    }

    public function update()
    {
        if ($this->authorize('edit', current_user())) {
            $notification = tap(current_user()->unreadNotifications->where('id', request('notification')))
                                ->markAsRead();
        }
        return back();
    }
}
