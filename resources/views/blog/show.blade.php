@extends('layouts.app')

@section('content')
    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-6xl font-bold leading-tight">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20 text-left">
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
        </span>

        <div class="flex py-10">
            <div class="w-1/3">
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-2/3 pl-10">
                <p class="text-xl text-gray-700 leading-8 font-light">
                    {{ $post->description }}
                </p>
            </div>
        </div>
    </div>
@endsection
