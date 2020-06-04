<x-app>
    <ul class="list-disc">

        @forelse ($notifications as $notification)
        <div class="flex justify-between items-center mb-2">
            <li>{{ $notification->data['mention'] }}</li>

            <form action="/notifications" method="POST">
                @csrf
                @method("PATCH")
                <input type="text" name="notification" id="notification" value="{{$notification->id}}" required hidden>
                <button type="submit" class="text-blue-500 hover:text-blue-700">Mark as read</button>
            </form>

        </div>
        @empty
        <p>You have no unread notifications.</p>
        @endforelse

    </ul>
</x-app>