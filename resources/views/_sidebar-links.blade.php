<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
        <a href="#" class="font-bold text-lg mb-4 block">Explore</a>
        <a href="#" class="font-bold text-lg mb-4 block">Notifications</a>
        <a href="#" class="font-bold text-lg mb-4 block">Messages</a>
        <a href="#" class="font-bold text-lg mb-4 block">Bookmarks</a>
        <a href="#" class="font-bold text-lg mb-4 block">Lists</a>
        <a href="{{route('profile', auth()->user())}}" class="font-bold text-lg mb-4 block">Profile</a>
        <a href="#" class="font-bold text-lg mb-4 block">More</a>
    </li>
</ul>