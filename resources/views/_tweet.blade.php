<div class="flex p-4 border-b border-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img src="https://www.w3schools.com/howto/img_avatar.png" class="w-12 rounded-full mr-2" alt="avatar">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>