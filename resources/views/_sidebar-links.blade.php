<div class="border-gray-900 rounded-lg py-4 px-6" style="background-color: #202020">
    <ul>
        <li>
            <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
        </li>
        <li>
            <a href="/explore" class="font-bold text-lg mb-4 block">Explore</a>
        </li>
        <li>
            <a href="{{route('profile', auth()->user())}}" class="font-bold text-lg mb-4 block">Profile</a>
        </li>
        <li>
            <a href="/notifications" class="font-bold text-lg mb-4 block">Notifications</a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf
                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    </ul>
</div>