<main class="sm:container sm:mx-auto sm:max-w-lg sm:mt-10">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Add New Observation') }}
                </header>

                <form wire:submit.prevent="saveObservation" class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8">

                    <div class="flex flex-wrap">
                        <label for="role" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Patient') }}:
                        </label>
                        <select id="patientId" class="form-input w-full @error('patientId')  border-red-500 @enderror"
                            wire:model="patientId">
                            <option>--Select Patient--</option>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->firstname }} {{ $patient->firstname }}{{ $patient->lastname }}</option>
                            @endforeach
                        </select>

                        @error('patientIdrole')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>


                    <div class="flex flex-wrap">
                        <label for="firstname" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('systolic') }}:
                        </label>

                        <input id="systolic" type="text" class="form-input w-full @error('firstname')  border-red-500 @enderror"
                        wire:model="systolic" value="{{ old('systolic') }}" required autocomplete="firstname">

                        @error('systolic')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="diastolic" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('diastolic') }}:
                        </label>

                        <input id="diastolic" type="text" class="form-input w-full @error('lastname')  border-red-500 @enderror"
                        wire:model="diastolic" value="{{ old('diastolic') }}" required autocomplete="lastname">

                        @error('diastolic')
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