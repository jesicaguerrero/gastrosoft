<x-app-layout>
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="text-center">
            <p class="mt-2 text-lg text-gray-600">Bienvenido al panel de control de Gastrosoft</p>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Sección POS -->
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Sistema POS</h2>
                <p class="mt-2 text-gray-500">Administra ventas, productos y clientes de manera sencilla y rápida.</p>
                <a href="#"
                    class="mt-4 inline-block px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">Ir
                    al POS</a>
            </div>

            <!-- Sección Gestión de Inventario -->
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Gestión de Inventario</h2>
                <p class="mt-2 text-gray-500">Controla el stock de productos y evita pérdidas.</p>
                <a href="#"
                    class="mt-4 inline-block px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">Ver
                    Inventario</a>
            </div>
        </div>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Sección Reportes -->
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Reportes</h2>
                <p class="mt-2 text-gray-500">Obtén información detallada sobre ventas y rendimiento.</p>
                <a href="#"
                    class="mt-4 inline-block px-6 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition duration-300">Ver
                    Reportes</a>
            </div>

            <!-- Sección Configuración -->
            <div class="p-6 bg-white rounded-lg shadow-md text-center">
                <h2 class="text-xl font-semibold text-gray-900">Configuración</h2>
                <p class="mt-2 text-gray-500">Personaliza la aplicación según tus necesidades.</p>
                <a href="#"
                    class="mt-4 inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">Ir
                    a Configuración</a>
            </div>
        </div>
    </div>
</x-app-layout>
