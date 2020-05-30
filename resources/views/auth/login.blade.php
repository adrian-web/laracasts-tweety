<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="col-md-8">

                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            email
                        </label>
                        <input type="email" name="email" id="email" autocomplete="email" value="{{old('email')}}"
                            required class="border border-gray-400 p-2 w-full">

                        @error('email')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                            password
                        </label>
                        <input type="password" name="password" id="password" autocomplete="current-password" required
                            class="border border-gray-400 p-2 w-full">

                        @error('password')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-1"
                                {{old('remember') ? 'checked' : ''}}>
                            <label for="remember" class="text-xs text-gray-700 font-bold uppercase">
                                Remember Me
                            </label>
                        </div>
                        @error('remember')
                        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div>
                        <button class="mr-2 bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>

                        <a class="text-xs text-gray-700" href="{{route('password.request')}}">Forgot password?</a>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-master>