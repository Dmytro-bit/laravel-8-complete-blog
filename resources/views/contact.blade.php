@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="mx-auto w-1/2 bg-green-100 rounded-lg p-6">
            @csrf

            <div class="form-group mb-4">
                <label for="name" class="block text-left mb-2 text-lg">Name</label>
                <input type="text" name="name" class="form-control w-full text-lg p-2" value="{{ old('name') }}" required>
            </div>

            <div class="form-group mb-4">
                <label for="email" class="block text-left mb-2 text-lg">Email</label>
                <input type="email" name="email" class="form-control w-full text-lg p-2" value="{{ old('email') }}" required>
            </div>

            <div class="form-group mb-4">
                <label for="subject" class="block text-left mb-2 text-lg">Subject</label>
                <input type="text" name="subject" class="form-control w-full text-lg p-2" value="{{ old('subject') }}" required>
            </div>

            <div class="form-group mb-4">
                <label for="message" class="block text-left mb-2 text-lg">Message</label>
                <textarea name="message" class="form-control w-full text-lg p-2" rows="5" required>{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary bg-blue-500 text-white py-2 px-4 rounded">Send Message</button>
        </form>
    </div>
@endsection
