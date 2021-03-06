<x-app>
    <header class="mb-6">
        <div class="relative">
            {{-- <img src="/images/profile-banner.jpg" alt="banner" style="width: 700px; height: 223px"
                class="mb-2 rounded-lg"> --}}
            <img src="{{ $user->banner }}" alt="banner" style="width: 700px; height: 223px" class="mb-2 rounded-lg">
            <img src="{{ $user->avatar }}"
                class="absolute rounded-full bottom-0 transform -translate-x-1/2 translate-y-1/2" alt="avatar"
                style="width: 150px; left: 50%;">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px;">
                <h2 class="font-bold text-2xl">{{$user->name}}</h2>
                <p class="text-sm">Joined at {{$user->created_at->diffForHumans()}}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                <a href="{{$user->path('edit')}}"
                    class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit
                    profile</a>
                @endcan

                {{-- colon ':' makes laravel interpret "$user" as variable, w/o colon it takes it as string --}}
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        {{-- <p class="text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum asperiores, id minima ad
            velit commodi, similique esse facilis eaque expedita nam soluta fugit ut qui quis suscipit illum molestiae!
            Harum quis labore nihil vitae, commodi ad nisi ducimus! Aspernatur quidem possimus fugit fugiat ut dolorem
            enim
            soluta dolor vero aliquid.</p> --}}
        <p class="text-sm">{{$user->description}}</p>
    </header>
    @include('_timeline', [
    'tweets' => $tweets
    ])
</x-app>