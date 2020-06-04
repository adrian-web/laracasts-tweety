@if ($message = Session::get('success'))

<div class="fixed bottom-0 right-0 mb-2 mr-2 py-2 px-4 border border-black shadow
            bg-blue-400 rounded hover:bg-blue-500" id="flash">

    <p class="text-sm text-white">{{ $message }}</p>

</div>

@endif