<x-app>
    <header class="mb-6 relative">
        <img src="/images/profile-banner.jpg" alt="banner" style="width: 700px; height: 223px" class="mb-2 rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{$user->name}}</h2>
                <p class="text-sm">Joined at {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div>
                <a href="#" class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit
                    profile</a>
                <a href="#" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow me</a>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum asperiores, id minima ad
            velit commodi, similique esse facilis eaque expedita nam soluta fugit ut qui quis suscipit illum molestiae!
            Harum quis labore nihil vitae, commodi ad nisi ducimus! Aspernatur quidem possimus fugit fugiat ut dolorem
            enim
            soluta dolor vero aliquid.</p>
        <img src="https://www.w3schools.com/howto/img_avatar.png"
            class="absolute transform rounded-full -translate-x-1/2 translate-y-1/2" alt="avatar"
            style="width: 150px; left: 50%; top: 20%;">

    </header>
    @include('_timeline', [
    'tweets' => $user->tweets
    ])
</x-app>