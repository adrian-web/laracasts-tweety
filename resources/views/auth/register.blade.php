<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 border border-gray-300 rounded-lg mb-4" style="background-color: #202020">


            <div class="font-bold text-lg mb-4">{{ __('Register') }}
            </div>


            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-300">Username</label>


                    <input id="username" type="text" name="username" value="{{ old('username') }}" required
                        autocomplete="username" class="border border-gray-400 p-2 w-full bg-black">

                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="name"
                        class="block mb-2 uppercase font-bold text-xs text-gray-300">{{ __('Name') }}</label>


                    <input id="name" type="text" class="border border-gray-400 p-2 w-full bg-black" name="name"
                        value="{{ old('name') }}" required autocomplete="name">

                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-300">{{ __('E-Mail Address') }}</label>


                    <input id="email" type="email" class="border border-gray-400 p-2 w-full bg-black" name="email"
                        value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 uppercase font-bold text-xs text-gray-300">{{ __('Password') }}</label>


                    <input id="password" type="password" class="border border-gray-400 p-2 w-full bg-black"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="password-confirm"
                        class="block mb-2 uppercase font-bold text-xs text-gray-300">{{ __('Confirm Password') }}</label>


                    <input id="password-confirm" type="password" class="border border-gray-400 p-2 w-full bg-black"
                        name="password_confirmation" required autocomplete="new-password">

                </div>

                <div class="mb-6">
                    <label for="description"
                        class="block mb-2 uppercase font-bold text-xs text-gray-300">{{ __('Description') }}</label>


                    <textarea name="description" id="description" class="border border-gray-400 p-2 w-full bg-black"
                        required cols="30" rows="10">{{ old('name') }}</textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                    @enderror

                </div>

                <div class="">

                    <button type="submit" class="mr-2 bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-700">
                        {{ __('Register') }}
                    </button>

                </div>
            </form>



        </div>
    </div>
</x-master>