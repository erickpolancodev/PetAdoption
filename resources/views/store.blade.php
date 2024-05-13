@extends('layouts.app')

@section('titulo')
    Store
@endsection

@section('contenido')
    <div class="grid gap-4 justify-center sm:grid-cols-12 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($items as $item)
            <div class="item bg-white p-4 shadow-md hover:shadow-lg my-3 rounded-lg w-full">
                <img src="../img/{{ $item->image }}" alt="{{ $item->name }} img" class="rounded-lg">
                <div class="pet-information">
                    <h2 class="font-bold text-lg">{{ $item->name }}</h2>
                    <p class="text-lg text-sky-600">{{ $item->price }} $USD</p>
                </div>
                <a href="./store/{{ $item->id }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor pointer font-bold p-2 mt-2 block text-center text-white rounded-lg">Read more</a>
            </div>
        @endforeach
    </div>
@endsection