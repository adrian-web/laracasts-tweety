@if (current_user()->isNot($user))
{{-- you can also use 'unless' instead of 'if', then 'isNot' turns into 'is' --}}
<form method="POST" action="{{route('follow', $user->username)}}">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">
        {{ current_user()->following($user) ? 'Unfollow me' : 'Follow me' }}
    </button>
</form>
@endif