@extends('layouts.app')

@section('titulo')
    Welcome - {{ auth()->user()->name }}
@endsection

@section('contenido')
    <div class="flex gap-4 justify-center">
        @foreach ($pets as $pet)
                <div class="pet bg-white p-4 shadow-md my-3 rounded-lg w-full md:w-6/12 lg:w-3/12 ">
                    <img src="./img/pets/{{ $pet->image }}" alt="{{ $pet->name }} img" class="rounded-lg">
                    <div class="pet-information">
                        <h2 class="font-bold text-lg">{{ $pet->name }}</h2>
                        <p>Breed: {{ $pet->breed }}</p>
                        <p>Age: {{ $pet->age }}</p>
                    </div>
                    <a href="./pets/{{ $pet->id }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Read more</a>
                </div>
        @endforeach
        @if($message)
            <div class="my-5">
                <h2 class="text-2xl text-center mb-5">{{$message}}</h2>
                <a href="{{ route('pets')}}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Go to adopt</a>
            </div>
        @endif 
    </div>
@endsection