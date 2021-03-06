<x-app>
    <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>
            <input type="text" name="name" id="name" value="{{$user->name}}" required
                class="border border-gray-400 p-2 w-full bg-black">

            @error('name')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Username
            </label>
            <input type="text" name="username" id="username" value="{{$user->username}}" required
                class="border border-gray-400 p-2 w-full bg-black">

            @error('username')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                email
            </label>
            <input type="email" name="email" id="email" value="{{$user->email}}" required
                class="border border-gray-400 p-2 w-full bg-black">

            @error('email')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label for="avatar" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                avatar
            </label>
            <div class="flex">
                <input type="file" name="avatar" id="avatar" class="border border-gray-400 p-2 w-full bg-black">

                <img src="{{ $user->avatar }}" alt="avatar" style="width: 50px;">
            </div>
            @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">

            <label for="banner" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                banner
            </label>
            <div class="flex">
                <input type="file" name="banner" id="banner" class="border border-gray-400 p-2 w-full bg-black">

                <img src="{{ $user->banner }}" alt="banner" style="width: 50px;">
            </div>
            @error('banner')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                password
            </label>
            <input type="password" name="password" id="password" required
                class="border border-gray-400 p-2 w-full bg-black">

            @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        {{-- '_confirmation' is important, it's laravel convention --}}
        <div class="mb-6">
            <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                password_confirmation
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                class="border border-gray-400 p-2 w-full bg-black">

            @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                description
            </label>
            {{-- <input type="text" name="name" id="name" value="{{$user->name}}" required
            class="border border-gray-400 p-2 w-full"> --}}
            <textarea name="description" id="description" required class="border border-gray-400 p-2 w-full bg-black"
                cols="30" rows="10">{{$user->description}}</textarea>

            @error('description')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <button class="mr-4 bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-700">Submit</button>
            <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
        </div>
    </form>
</x-app>