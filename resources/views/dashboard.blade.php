@extends('layouts.app')

@section('titulo')
    Dashboard
@endsection

@section('contenido')
    <div class="flex gap-4 justify-center">
        Welcome - {{ auth()->user()->name }}
    </div>
@endsection