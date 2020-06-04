<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 border border-gray-300 rounded-lg" style="background-color: #202020">
            <div class="">

                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-300">
                            email
                        </label>
                        <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}"
                            required class="border border-gray-400 p-2 w-full bg-black">

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-300">
                            password
                        </label>
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="border border-gray-400 p-2 w-full bg-black">

                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-1"
                                {{old('remember') ? 'checked' : ''}}>
                            <label for="remember" class="text-xs text-gray-300 font-bold uppercase">
                                Remember Me
                            </label>
                        </div>
                        @error('remember')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <button class="mr-2 bg-blue-600 text-white rounded py-2 px-4 hover:bg-blue-700">Submit</button>

                        <a class="text-xs text-gray-300" href="{{route('password.request')}}">Forgot password?</a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-master>