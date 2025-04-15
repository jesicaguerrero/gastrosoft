<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Gestión de Ventas y Transacciones
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4 text-blue-600 text-center">Sistema POS</h3>
                <p class="text-gray-700 mb-4 text-center">
                    En MARICHANEL, utilizamos un sistema POS avanzado para gestionar las ventas y transacciones de manera eficiente. Aquí puedes tomar pedidos, procesar pagos, generar recibos, y gestionar mesas.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('tomarPedidos')">Tomar Pedidos</button>
                        <div id="tomarPedidos" class="hidden mt-4 text-gray-700 text-center">
                            <p>Utiliza nuestra interfaz intuitiva para tomar pedidos de manera rápida y eficiente. Puedes personalizar los pedidos según las preferencias del cliente y enviar las órdenes directamente a la cocina.</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('procesarPagos')">Procesar Pagos</button>
                        <div id="procesarPagos" class="hidden mt-4 text-gray-700 text-center">
                            <p>Procesa los pagos de manera segura y rápida. Nuestro sistema acepta múltiples formas de pago, incluyendo tarjetas de crédito, débito, y pagos móviles.</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('generarRecibos')">Generar Recibos</button>
                        <div id="generarRecibos" class="hidden mt-4 text-gray-700 text-center">
                            <p>Genera recibos detallados para cada transacción. Los recibos pueden ser impresos o enviados por correo electrónico al cliente.</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('gestionarMesas')">Gestionar Mesas</button>
                        <div id="gestionarMesas" class="hidden mt-4 text-gray-700 text-center">
                            <p>Gestiona las mesas del restaurante de manera eficiente. Puedes asignar mesas, realizar seguimiento de ocupación, y optimizar la distribución de los clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 text-center">
                    <h4 class="text-md font-bold text-gray-800">Teléfono para pedidos</h4>
                    <p class="text-gray-700">Llámanos al: <span class="font-bold">[Número de Teléfono]</span></p>
                </div>
                
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section.classList.contains('hidden')) {
                section.classList.remove('hidden');
            } else {
                section.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
