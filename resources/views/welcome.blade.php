<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>El Malecón - Restaurante</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>    

    <!-- Styles -->
    <style>
        /* Tailwind CSS Styles */
        /* ... (tu estilo original aquí) ... */
    </style>
</head>

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <h1 class="text-3xl font-bold text-gray-900">Bienvenido a El Malecón</h1>
            </div>

            <div class="mt-6 text-center">
                <p class="text-lg text-gray-600">
                    Disfruta de la mejor comida del mar en un ambiente acogedor y familiar. ¡Te esperamos!
                </p>
                <p class="mt-4 text-gray-500">
                    Especialidades: Pescado fresco, mariscos, y platos típicos de la región.
                </p>
                <a href="#reservas"
                    class="mt-6 inline-block px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">Reserva
                    tu mesa</a>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <!-- Aquí puedes añadir más secciones o enlaces como en tu código original -->
                    <div
                        class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900">Ubicación</h2>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Estamos ubicados en el corazón de la ciudad. Ven y disfruta de una experiencia
                                gastronómica única.
                            </p>
                        </div>
                    </div>

                    <div
                        class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <h2 class="mt-6 text-xl font-semibold text-gray-900">Horarios</h2>
                            <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                Lunes a Domingo: 12:00 PM - 10:00 PM
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-left">
                    &nbsp;
                </div>

                {{-- <div class="text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
