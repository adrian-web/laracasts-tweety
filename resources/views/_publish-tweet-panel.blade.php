<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets" enctype="multipart/form-data">
        @csrf
        <div id="drop-zone" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);">

            <textarea name="body" id="body" class="w-full" placeholder="What's up doc?" required></textarea>
            <hr class="my-4" id="par-body">

            <footer class="flex justify-between items-center">
                <img src="{{auth()->user()->avatar}}" class="rounded-full mr-2" alt="avatar" width="50" height="50">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 rounded-lg shadow px-8 text-sm text-white h-10">Publish</button>
            </footer>

            <input type="file" name="image" id="image" class="border border-gray-400 p-2 w-full mt-4" hidden>
        </div>
    </form>

    @error('body')
    <p class="text-red-500 text-sm mt-2">
        {{ $message }}
    </p>
    @enderror
</div>