{{-- layouts 폴더에 app.blade.php --}}
@extends('layouts.app')

@section('content')

    <div class="flex">
        <div class="sm:flex-1 md:flex-1"></div>
        <div class="flex-auto m-8 sm:flex-auto md:flex-auto lg:flex-auto xl:flex-auto">
            <div class="bg-white rounded-lg shadow-xl p-6">
                <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto" src="{{ asset('images/bob.jpg') }}">
                <div class="text-center">
                    <h2 class="text-lg">Erin Lindford</h2>
                    <div class="text-purple-500">Customer Support</div>
                    <div class="text-gray-600">erinlindford@example.com</div>
                    <div class="text-gray-600">(555) 765-4321</div>
                </div>
            </div>
        </div>
        <div class="sm:flex-1 md:flex-1"></div>
    </div>

{{--<div class="flex-grow-0 sm:flex-grow md:flex-grow-0 lg:flex-grow xl:flex-grow-0">--}}
{{--    <div class="bg-white rounded-lg shadow-xl p-6">--}}
{{--        <img class="h-16 w-16 rounded-full mx-auto" src="{{ asset('images/bob.jpg') }}">--}}
{{--        <div class="text-center">--}}
{{--            <h2 class="text-lg">Erin Lindford</h2>--}}
{{--            <div class="text-purple-500">Customer Support</div>--}}
{{--            <div class="text-gray-600">erinlindford@example.com</div>--}}
{{--            <div class="text-gray-600">(555) 765-4321</div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
