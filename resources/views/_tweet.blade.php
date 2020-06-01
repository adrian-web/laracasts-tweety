<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img src="{{$tweet->user->avatar}}" class="w-12 rounded-full mr-2" alt="avatar">
        </a>

    </div>
    <div class="flex justify-between items-center w-full">
        <div class="">
            <h5 class="font-bold mb-4">
                <a href="{{ route('profile', $tweet->user) }}">
                    {{ $tweet->user->name }}
                </a>
            </h5>
            <p class="text-sm mb-3 break-all">
                {{ $tweet->body }}
                <span>
                    @if ($tweet->image)
                    <img src="{{ $tweet->image }}" class="mt-2" alt="image">
                    @endif
                </span>
            </p>

            <x-like-buttons :tweet="$tweet" />
        </div>
        <div class="text-sm mt-3">
            <form method="POST" action="/tweets/{{$tweet->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">
                    <svg viewBox="0 0 20 20" class="w-8 ml-2">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="fill-current">
                                <path
                                    d="M2,2 L18,2 L18,4 L2,4 L2,2 Z M8,0 L12,0 L14,2 L6,2 L8,0 Z M3,6 L17,6 L16,20 L4,20 L3,6 Z M8,8 L9,8 L9,18 L8,18 L8,8 Z M11,8 L12,8 L12,18 L11,18 L11,8 Z"
                                    id="Combined-Shape"></path>

                            </g>
                        </g>
                    </svg>
                    {{-- Delete --}}
                </button>
            </form>
        </div>
    </div>
</div>