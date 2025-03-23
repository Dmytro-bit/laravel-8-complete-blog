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

    <div class="sm:grid grid-cols-2 w-4/5 m-auto my-4 bg-gray-200 p-6 rounded-lg">
        <div class="mr-4">
            <h2 class="text-2xl font-bold mb-4">Welcome to PyHub!</h2>
            <p class="text-black">
                PyHub is your friendly gateway to the exciting world of Python programming. Whether you're brand new to
                coding or looking to sharpen your skills, we're here to guide you through simple, clear, and enjoyable
                tutorials. Our mission is to break down complex concepts into easy-to-follow lessons, empowering
                beginners like you to build confidence and succeed in Python.
            </p>
        </div>
        <div>
            <img src="{{ asset('images/67af2be108295-Test POst.jpg') }}" alt="About Us Image 1" class="rounded-lg">
        </div>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto my-4 bg-gray-200 p-6 rounded-lg">
        <div>
            <img src="{{ asset('images/python.webp') }}" alt="About Us Image 2" class="rounded-lg">
        </div>
        <div class="ml-4">
            <h2 class="text-2xl font-bold mb-4">Why Learn Python with Us?</h2>
            <p class="text-black">
                At PyHub, we believe that learning to code should be approachable and fun. Our blog offers
                step-by-step guides, practical examples, and interactive exercises designed specifically for beginners.
                We focus on helping you understand core Python concepts clearly, enabling you to quickly turn ideas into
                real-world projects. Join us, and let's embark on your Python journey together!
            </p>
        </div>
    </div>
@endsection
