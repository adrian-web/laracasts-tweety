<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\User;

class TweetsController extends Controller
{
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

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'image' => $attributes['image']
        ]);

        return redirect()->route('home');
    }

    public function destroy(Tweet $tweet)
    {
        if ($this->authorize('edit', $tweet->user)) {
            $tweet->delete();
        }

        return back();
    }
}
