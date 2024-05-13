@extends('layouts.app')

@section('titulo')
    Adopt me
@endsection

@section('contenido')
    <div class="grid gap-4 justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
        @foreach ($pets as $pet)
            <div class="pet justify-center bg-white p-4 shadow-md hover:shadow-lg my-3 rounded-lg w-full">
                <img src="./img/pets/{{ $pet->image }}" alt="{{ $pet->name }} img" class="rounded-lg">
                <div class="pet-information">
                    <h2 class="font-bold text-lg">{{ $pet->name }}</h2>
                    <p>Breed: {{ $pet->breed }}</p>
                    <p>Age: {{ $pet->age }}</p>
                </div>
                <a href="./pets/{{ $pet->id }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Read more</a>
            </div>
        @endforeach
    </div>
    <div class="pagination my-10">
        {{ $pets->onEachSide(6)->links('pagination::simple-tailwind') }}
    </div>
@endsection