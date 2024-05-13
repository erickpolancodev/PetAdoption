@extends('layouts.app')

@section('titulo')
    Login
@endsection

@section('contenido')
    <div class="md:flex md:gap-4 md:justify-center md:items-center">
        <div class="md:w-4/12">
            <img src="{{ asset('img/login-img.jpg') }}" alt="login image">
        </div>
        <div class="md:w-4/12 p-6 bg-white rounded-lg shadow">
            <form action="{{ route('login')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <input type="text" name="username" id="username" placeholder="Username" class="border p-3 rounded-lg w-full @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="password" name="password" id="password" placeholder="Password" class="border p-3 rounded-lg w-full @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-sm text-gray-500">Remember me</label>
                </div>

                <input type="submit" value="Login" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                
                @if(session('message'))
                    <div class="mb-5">
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ session('message') }}</p>
                    </div>
                @endif
            </form>
        </div>  
    </div>
@endsection