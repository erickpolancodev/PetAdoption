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
            <div class="container mx-auto flex gap-4 justify-center md:justify-between items-center flex-wrap">
                <h1 class="text-3xl font-black"><a href="./">Pet Adoption</a>  </h1>

                @guest
                    <nav class="flex gap-4 items-center justify-center">
                        <a class="font-bold uppercase text-gray-600 text-sm md:text-md lg:text-lg" href="{{ route('login')}}"> Login</a>
                        <a class="font-bold uppercase text-gray-600 text-sm md:text-md lg:text-lg" href="{{ route('register')}}"> Register</a>
                    </nav>
                @endguest

                @auth
                <nav class="flex gap-4 items-center justify-center">
                    <p><strong>{{ auth()->user()->username }} | </strong></p>
                    <a class="font-bold uppercase text-gray-600 text-sm md:text-md lg:text-lg" href="{{ route('store')}}"> Store</a>
                    <a class="font-bold uppercase text-gray-600 text-sm md:text-md lg:text-lg" href="{{ route('dashboard')}}"> Dashboard</a>
                    <form action="{{ route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="font-bold uppercase text-red-600 text-sm md:text-md lg:text-lg" href=""><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                    </form>
                </nav>
                @endauth
                
            </div>
            
        </header>

        <main class="container mx-auto mt-10 w-10/12">
            <h2 class="font-black text-center text-3xl mb-8">@yield('titulo')</h2>
            @yield('contenido')
        </main>

        <footer class="text-center p-5 text-gray-500">
            Pet Adoption - All rights reserved {{ now()->year }}
        </footer>
    </body>
</html>