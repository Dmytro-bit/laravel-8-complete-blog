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
                <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}"
                     class="w-full h-auto rounded-lg">
            </div>
            <div class="w-2/3 pl-10">
                <p class="text-xl text-gray-700 leading-8 font-light">
                    {{ $post->description }}
                </p>
            </div>



            <div class="bg-gray-200 p-6 rounded-lg ml-4">
                <h2 class="text-4xl">Comments</h2>
                @if ($post->comments->isEmpty())
                    <p class="mt-4 text-gray-600">No comments yet</p>
                @else
                    @foreach ($post->comments as $comment)
                        <div class="mt-4 bg-gray-300 p-4 rounded">
                            <p><strong class="text-blue-800">{{ $comment->user->name }}</strong></p>
                            <p class="mt-2">{{ $comment->body }}</p>
                        </div>
                    @endforeach
                @endif
                @if (Auth::check())
                    <form action="/comments" method="POST" class="mt-4">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <textarea name="body" class="w-full h-20 p-2 border rounded" placeholder="Add a comment..."></textarea>
                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded mt-2">Submit</button>
                    </form>
                @endif
            </div>


        </div>
    </div>
@endsection
