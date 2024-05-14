@extends('layouts.app')

@section('titulo')
    Description
@endsection

@section('contenido')
    <a href="{{ route('store') }}" class="text-lg text-sky-600"> < Regresar</a>

    <div class="grid justify-center grid-cols-1 lg:grid-cols-2 gap-4 my-3">
        <div class="flex img-item w-full md:justify-center lg:justify-end ">
            <img src="../img/{{ $item->image }}" alt="{{ $item->name }} img" class="rounded-lg">
        </div>
        <div class="des-item w-full lg:w-10/12 bg-white rounded-lg shadow-lg p-4 md:justify-center lg:justify-start ">
            <div class="pet-information">
                <h2 class="font-bold text-2xl mb-4 text-sky-800">{{ $item->name }}</h2>
                <p class="mb-2 text-justify"><strong>Description:</strong>  </br></br> {{ $item->description }}</p>
                <p class="text-xl text-sky-600 my-3">{{ $item->price }} $USD</p>
            </div>

            @if(!$item->user_id)
                @guest
                    <a href="{{ route('login') }}" class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Login to adopt me</a>
                @endguest

                @auth
                    <form action="../buy/{{$item->id}}" method="POST">
                        @csrf
                        <button type="submit" class="px-8 bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Buy</button>
                    </form>
                @endauth
            @endif
            
            
        </div>
    </div>
@endsection