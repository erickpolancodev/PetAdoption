@extends('layouts.app')

@section('titulo')
    Register
@endsection

@section('contenido')
    <div class="md:flex md:gap-4 md:justify-center md:items-center">
        <div class="md:w-4/12">
            <img src="{{ asset('img/register-img.jpg') }}" alt="register image">
        </div>
        <div class="md:w-4/12 p-6 bg-white rounded-lg shadow">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <input type="text" name="name" id="name" placeholder="Name" class="border p-3 rounded-lg w-full @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                    @error('name')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="text" name="username" id="username" placeholder="Username" class="border p-3 rounded-lg w-full @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                    @error('username')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <input type="text" name="email" id="email" placeholder="Email" class="border p-3 rounded-lg w-full @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                    @error('email')
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
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="border p-3 rounded-lg w-full">
                    @error('password')
                        <p class="text-red-500 my-2 rounded-lg text-sm p-2">{{ $message }}</p>
                    @enderror
                </div>

                <input type="submit" value="Register" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>  
    </div>
@endsection