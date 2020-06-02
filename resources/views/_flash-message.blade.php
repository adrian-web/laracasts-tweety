@if ($message = Session::get('success'))

<div class="fixed bottom-0 right-0 mb-2 mr-2 p-4 border border-black hover:bg-black" id="flash">

    <p class="text-sm text-blue-500 ">{{ $message }}</p>

</div>

@endif