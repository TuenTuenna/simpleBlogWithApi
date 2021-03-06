{{-- layouts 폴더에 app.blade.php --}}
@extends('layouts.app')

@section('content')

    <div class="flex">
        <div class="sm:flex-1 md:flex-1 xl:flex-grow"></div>
        <div class="flex-auto m-8 sm:flex-auto md:flex-auto lg:flex-auto xl:flex-auto">
            <div class="md:flex md:mx-0 bg-white rounded-lg shadow-xl p-6">
                <img class="h-16 w-16 md:h-24 md:w-24 rounded-full mx-auto md:mx-0 md:mr-8" src="{{ asset('images/bob.jpg') }}">
                <div class="text-center md:text-left">
                    <h2 class="text-lg">Erin Lindford</h2>
                    <div class="text-purple-500">Customer Support</div>
                    <div class="text-gray-600">erinlindford@example.com</div>
                    <div class="text-gray-600">(555) 765-4321</div>
                </div>
            </div>
        </div>
        <div class="sm:flex-1 md:flex-1"></div>
    </div>

    @if(session('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
            <div class="flex">
                <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                <div>
                    <p class="font-bold">성공!</p>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif

    @error('email')
    <div class="  bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">이런!</strong>
                <span class="block sm:inline">{{ $message }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
    </div>
    @enderror
        <div class="flex justify-center">
            <div class="bg-white rounded-lg shadow-xl p-6 m-8 w-full md:w-1/2 xl:w-1/3">
                {{-- 메일 보내기 --}}
                <form class="flex w-full block" method="POST" action="/sendmail">
                    @csrf
                    <input class="bg-white focus:outline-none focus:shadow-outline border
                        border-gray-300 rounded-lg py-2 px-4 block w-full
                        appearance-none leading-normal"
                           placeholder="your@email.com"
                           name="email" type="email" required autocomplete="email" autofocus
                    >
                    <!-- Using utilities: -->
                    <button class="bg-blue-500
                            hover:bg-blue-700
                            text-white
                            font-bold py-2 px-4 ml-6 rounded"
                            type="submit"
                    >
                        send
                    </button>
                </form>
            </div>
    </div>




@endsection
