@if ($message = Session::get('success'))

<button type="button" class="fixed bottom-0 right-0 mb-2 mr-2 py-2 px-4
            bg-blue-600 rounded hover:bg-blue-700 cursor-pointer text-sm" id="flash">
    {{ $message }}
</button>

@endif