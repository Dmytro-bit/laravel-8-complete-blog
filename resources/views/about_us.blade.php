@extends('layouts.app')

@section('content')
    <div class="text-center py-15">
        <h1 class="text-4xl font-bold py-10">
            About Us
        </h1>
        <p class="m-auto w-4/5 text-gray-500">
            Welcome to our About Us page. Here you can learn more about our mission, values, and the team behind our
            success.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-10">
        <div class="flex items-center mr-4">
            <p class="text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum
            </p>
        </div>
        <div>
            <img src="{{ asset('images/67af2be108295-Test POst.jpg') }}" alt="About Us Image 1" class="rounded-lg">
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-10">
        <div>
            <img src="{{ asset('images/python.webp') }}" alt="About Us Image 2" class="rounded-lg">
        </div>
        <div class="flex items-center ml-4">
            <p class="text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum
            </p>
        </div>
    </div>
@endsection
