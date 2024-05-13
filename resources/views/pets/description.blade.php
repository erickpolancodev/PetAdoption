@extends('layouts.app')

@section('titulo')
    Description
@endsection

@section('contenido')
    <a href="{{ route('pets') }}" class="text-lg text-sky-600"> < Regresar</a>
    <div class="flex justify-center">
        <div class="img-pet w-4/12">
            <img src="../img/pets/{{ $pet->image }}" alt="{{ $pet->name }} img" class="rounded-lg">
        </div>
        <div class="des-pet flex flex-col w-4/12 bg-white rounded-lg shadow-lg p-4">
            <div class="pet-information">
                <h2 class="font-bold text-lg mb-4">{{ $pet->name }}</h2>
                <p class="mb-2">Breed: {{ $pet->breed }}</p>
                <p class="mb-2">Age: {{ $pet->age }}</p>
                <p class="mb-2 text-justify">Description: </br></br> {{ $pet->description }}</p>
            </div>
            <a href="./pets/{{ $pet->id }}" class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Adopt me</a>
        </div>
    </div>
@endsection