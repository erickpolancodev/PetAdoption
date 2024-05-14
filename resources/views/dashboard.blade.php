@extends('layouts.app')

@section('titulo')
    Dashboard {{ auth()->user()->name }}
@endsection

@section('contenido')
    <div class="gap-4 justify-center grid grid-cols-1">
        @if($pets->count() !== 0)
            <h2 class="text-xl text-center font-bold">Pets adopted</h2>
        @endif
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
        @if($items->count() !== 0)
            <h2 class="text-xl text-center font-bold">Items buyed</h2>
        @endif
        <div class="grid gap-4 justify-center grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 ">
        @foreach ($items as $item)
            <div class="item justify-center bg-white p-4 shadow-md hover:shadow-lg my-3 rounded-lg w-full">
                <img src="../img/{{ $item->image }}" alt="{{ $item->name }} img" class="rounded-lg">
                <div class="pet-information">
                    <h2 class="font-bold text-lg">{{ $item->name }}</h2>
                    <p class="text-lg text-sky-600">{{ $item->price }} $USD</p>
                </div>
                <a href="./store/{{ $item->id }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Read more</a>
            </div>
        @endforeach
    </div>

    </div>
    @if($message)
        <div class="my-5">
            <h2 class="text-2xl text-center mb-5">{{$message}}</h2>
        </div>
    @endif 
@endsection