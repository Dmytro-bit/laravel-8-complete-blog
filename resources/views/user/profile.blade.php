@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center">
        <h1 class="text-4xl font-bold mb-4">Profile</h1>

        <div class="card mb-4 mx-auto w-1/2 bg-green-100 rounded-lg p-6">
            <div class="card-body">
                <img src="{{ $user->profile_picture_url }}" alt="Profile Picture" class="w-32 h-32 rounded-full mx-auto mb-4">
                <h4 class="text-2xl mb-2">{{ $user->name }}</h4>
                <p class="text-lg mb-2"><strong>Email:</strong> {{ $user->email }}</p>
                <p class="text-lg"><strong>Joined:</strong> {{ $user->created_at->format('jS M Y') }}</p>
            </div>
        </div>

        <h3 class="text-3xl font-semibold mb-4">Edit Profile</h3>
        <form action="{{ route('profile.update') }}" method="POST" class="mx-auto w-1/2 bg-green-100 rounded-lg p-6" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group mb-4">
                <label for="name" class="block text-left">Name</label>
                <input type="text" name="name" class="form-control w-full" value="{{ $user->name }}">
            </div>

            <div class="form-group mb-4">
                <label for="password" class="block text-left">New Password</label>
                <input type="password" name="password" class="form-control w-full">
            </div>

            <div class="form-group mb-4">
                <label for="profile_picture" class="block text-left">Profile Picture</label>
                <input type="file" name="profile_picture" class="form-control w-full">
            </div>

            <button type="submit" class="btn btn-primary bg-blue-500 text-white py-2 px-4 rounded">Update Profile</button>
        </form>

        <h3 class="text-3xl font-semibold mt-8 mb-4">User's Posts</h3>
        @if($posts->count())
            @foreach($posts as $post)
                <div class="card mb-3 mx-auto w-1/2 bg-green-100 rounded-lg p-6">
                    <div class="card-body">
                        <h5 class="text-xl font-bold">{{ $post->title }}</h5>
                        <p>{{ Str::limit($post->content, 150) }}</p>
                        <a href="/blog/{{ $post->slug }}" class="text-blue-500">Read more</a>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-lg">No posts yet.</p>
        @endif
    </div>
@endsection
