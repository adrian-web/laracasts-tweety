<?php

namespace App\Http\Controllers;

use App\Notifications\UserMentioned;
use Illuminate\Http\Request;
use App\Tweet;
use App\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class TweetsController extends Controller
{
    public $matches = [];

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body'=>['required', 'max:255'],
            'image'=>['file']
        ]);

        if (request('image')) {
            $attributes['image'] = request('image')->store('images');
        } else {
            $attributes['image'] = null;
        }

        $tweet = Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'image' => $attributes['image']
        ]);

        $mentions = $tweet->mentions($tweet->body);
        Notification::send($mentions, new UserMentioned($tweet));
        // for single user
        // request()->user()->notify(new UserMentioned($tweet));

        return redirect()->route('home')->with('success', 'Tweet published!');
    }

    public function destroy(Tweet $tweet)
    {
        if ($this->authorize('edit', $tweet->user)) {
            $tweet->delete();
        }

        return back();
    }
}
