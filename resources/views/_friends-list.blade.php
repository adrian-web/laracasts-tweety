<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>

    <ul>
        @forelse (auth()->user()->follows as $user)
        <li class="{{ $loop->last ? '' : 'mb-4' }}">
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img src="{{ $user->avatar }}" class="w-10 rounded-full mr-2" alt="avatar">

                    {{$user->name}}
                </a>
            </div>
        </li>
        @empty
        <li class="">No friends yet :/</li>
        @endforelse
    </ul>
</div>