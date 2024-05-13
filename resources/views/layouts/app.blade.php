<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pet Adoption | @yield('titulo')</title>
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black"><a href="./">Pet Adoption</a>  </h1>
                <nav class="flex gap-4 items-center">
                    <a class="font-bold uppercase text-gray-600" href="#"> Login</a>
                    <a class="font-bold uppercase text-gray-600" href="{{ route('register')}}"> Register</a>
                </nav>
            </div>
            
        </header>

        <main class="mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-8">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500">
            Pet Adoption - All rights reserved {{ now()->year }}
        </footer>
    </body>
</html>