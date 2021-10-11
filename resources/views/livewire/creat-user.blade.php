<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Add New User') }}
                </header>

                <form wire:submit.prevent="saveUser" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8">

                    <div class="flex flex-wrap">
                        <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Firstname') }}:
                        </label>

                        <input id="firstname" type="text" class="form-input w-full @error('firstname')  border-red-500 @enderror"
                        wire:model="firstname" value="{{ old('firstname') }}" required autocomplete="firstname">

                        @error('firstname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="lastname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Lastname') }}:
                        </label>

                        <input id="lastname" type="text" class="form-input w-full @error('lastname')  border-red-500 @enderror"
                        wire:model="lastname" value="{{ old('lastname') }}" required autocomplete="lastname">

                        @error('lastname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email"
                            class="form-input w-full @error('email') border-red-500 @enderror" wire:model="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="role" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Role') }}:
                        </label>
                        <select id="role" class="form-input w-full @error('role')  border-red-500 @enderror"
                            wire:model="role">
                            <option>--Select Role--</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>

                        @error('role')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                            {{ __('Submit') }}
                        </button>

                        {{-- <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </p> --}}
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>