@extends('layouts.app')

@section('titulo')
    Description
@endsection

@section('contenido')
    @if(!$pet->status)
        <a href="{{ route('pets') }}" class="text-lg text-sky-600"> < Regresar</a>
    @else
        <a href="{{ route('dashboard') }}" class="text-lg text-sky-600"> < Regresar</a>
    @endif
    <div class="grid justify-center grid-cols-1 lg:grid-cols-2 gap-4 my-3">
        <div class=" flex img-pet w-full md:justify-center lg:justify-end ">
            <img src="../img/pets/{{ $pet->image }}" alt="{{ $pet->name }} img" class="rounded-lg">
        </div>
        <div class="des-pet w-full lg:w-10/12 bg-white rounded-lg shadow-lg p-4 md:justify-center lg:justify-start ">
            <div class="pet-information">
                <h2 class="font-bold text-2xl mb-4 text-sky-800">{{ $pet->name }}</h2>
                <p class="mb-2"><strong>Breed:</strong> {{ $pet->breed }}</p>
                <p class="mb-2"><strong>Age:</strong>  {{ $pet->age }}</p>
                <p class="mb-2 text-justify"><strong>Description:</strong>  </br></br> {{ $pet->description }}</p>
            </div>
            <div class="mt-8">
                @if(!$pet->status)
                    @guest
                        <a href="{{ route('login') }}" class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 text-center text-white rounded-lg">Login to adopt me</a>
                    @endguest

                    @auth
                        <form action="../adopt/{{$pet->id}}" method="POST">
                            @csrf
                            <button type="submit" class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Adopt me</button>
                        </form>
                    @endauth
                @endif
            </div>
            
            
        </div>
    </div>
@endsection