@extends('layouts.app')

@section('content')
    <div class="w-full lg:w-5/12">
        <div class="bg-white shadow p-8 rounded-lg">
            <h1 class="font-medium text-xl mb-5">{{ $title }}</h1>

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="mb-5">
                    <label for="email" class="text-sm mb-2 block font-medium">Email</label>
                    <input type="email" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="email" id="email">
                    @error('email')
                        <span role="alert" class="mt-2 text-red-500 block text-sm">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password" class="text-sm mb-2 block font-medium">Password</label>
                    <input type="password" class="px-4 py-2 rounded border w-full focus:border-blue-500 focus:outline-none focus:shadow-outline" name="password" id="password">
                    @error('password')
                        <span role="alert" class="mt-2 text-red-500 block text-sm">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="mb-5 flex items-center">
                    <input type="checkbox" class="mr-2" name="remember" id="remember">
                    <label for="remember" class="select-none">Remember me</label>
                </div>

                <button type="submit" class="focus:outline-none focus:shadow-outline px-4 py-2 rounded bg-blue-500 hover:bg-blue-600 text-white transition-colors duration-150">
                    Login
                </button>
            </form>
        </div>
    </div>
@endsection