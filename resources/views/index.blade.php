@extends('layouts.app')

@section('content')
    <div class="relative background-image grid grid-cols-1 m-auto"
         style="background-image: url('{{asset('images/python.webp')}}'); background-size: cover; background-position: bottom; height: 100vh;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a Python developer?
                </h1>
                <a
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($recentPosts as $post)
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-32 object-cover mb-4 rounded">
                    <h3 class="text-2xl font-bold mb-2">{{ $post->title }}</h3>
                    <p class="text-gray-700 mb-4">{{ Str::limit($post->description, 100) }}</p>
                    <a href="/blog/{{ $post->id }}" class="text-blue-500">Read More</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
