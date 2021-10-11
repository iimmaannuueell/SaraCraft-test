@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

    {{-- <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
        Dashboard
    </header> --}}

    {{-- <livewire:creat-patient/> --}}
    <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

        <div class="p-3">
            <a href="{{ route('create.user') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                Create New User
            </a>&nbsp;&nbsp;

            <a href="{{ route('patient.create') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                Create New Patient
            </a>&nbsp;&nbsp;&nbsp;&nbsp;

            <a href="{{ route('observation') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                Patient Observation
            </a>&nbsp;&nbsp;&nbsp;&nbsp;
        
            <a href="{{ route('users.export') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                Export users
            </a>&nbsp;&nbsp;&nbsp;&nbsp;

            {{-- <a href="{{ route('observation.export') }}" class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
                Export Observation
            </a>&nbsp;&nbsp;&nbsp;&nbsp; --}}
            
        </div>

    </section>
    <br><br>


    <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <livewire:show-patient 
            />
    </section
</main>
@endsection
