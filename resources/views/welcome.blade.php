<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> MARICHANEL - Restaurante </title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="antialiased bg-gray-100">
    <div class="relative min-h-screen flex flex-col items-center justify-center p-6">
        
        <!-- Logo -->
        <div class="mb-6">
            <img src="{{ asset('img/logoGastrosoft.png') }}" alt="Logo Gastrosoft" class="w-40 h-auto">
        </div>
        
        <!-- Navegación -->
        @if (Route::has('login'))
            <div class="absolute top-6 right-6">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-gray-600 hover:text-gray-900">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-gray-600 hover:text-gray-900">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <!-- Contenido Principal -->
        <div class="max-w-2xl text-center">
            <h1 class="text-4xl font-bold text-gray-900">Bienvenido a Gastrosoft</h1>
            <p class="mt-4 text-lg text-gray-600">Disfruta de la mejor comida del mar en un ambiente acogedor y familiar. ¡Te esperamos!</p>
            <p class="mt-2 text-gray-500">Especialidades: Pescado fresco, mariscos, y platos típicos de la región.</p>
            <a href="{{ route('login') }}" class="mt-6 inline-block px-6 py-2 bg-cyan-500 text-white rounded-lg hover:bg-cyan-600 transition duration-300">Iniciar</a>
        </div>

        <!-- Secciones Adicionales -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Ubicación</h2>
                <p class="mt-2 text-gray-500">Estamos en la ciudad de Bucaramanga. Ven y disfruta de una experiencia gastronómica única.</p>
            </div>
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Horarios</h2>
                <p class="mt-2 text-gray-500">Lunes a Sabado: 7:00 AM - 5:00 PM</p>
            </div>
        </div>
    </div>
</body>

</html>
