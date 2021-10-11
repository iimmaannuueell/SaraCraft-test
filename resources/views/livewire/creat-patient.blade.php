<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Add New Patient') }}
                </header>

                <form wire:submit.prevent="savePatient" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8">

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
                        wire:model="lastname" value="{{ old('larstname') }}" required autocomplete="lastname">

                        @error('lastname')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="phone" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Phone Number') }}:
                        </label>

                        <input id="phone" type="text" class="form-input w-full @error('phone')  border-red-500 @enderror"
                        wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone">

                        @error('phone')
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
                        <label for="dob" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Date of Birth') }}:
                        </label>

                        <input id="dob" type="date" class="form-input w-full @error('dob')  border-red-500 @enderror"
                            wire:model="dob" value="{{ old('dob') }}" required autocomplete="dob">

                        @error('dob')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Gender') }}:
                        </label>
                        <select id="gender" class="form-input w-full @error('gender')  border-red-500 @enderror"
                            wire:model="gender">
                            <option>--Select Gender--</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>

                        @error('dob')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="flex flex-wrap">
                        <label for="address" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Address') }}:
                        </label>

                        <input id="address" type="text" class="form-input w-full @error('address')  border-red-500 @enderror"
                            wire:model="address" value="{{ old('address') }}" required autocomplete="address">

                        @error('address')
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