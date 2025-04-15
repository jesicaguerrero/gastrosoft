<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Información 
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4 text-blue-600 text-center"> Bienvenido a GastroSoft</h3>
                <p class="text-gray-700 mb-4 text-center">
                Bienvenido a GastroSoft, la solución ideal para la gestión de cuentas en restaurantes. 
                Aquí encontrarás toda la información relevante sobre nuestro sistema.
                </p>
                
                <div class="flex flex-col items-center space-y-6">
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('gestion')">Gestión de pedidos</button>
                        <div id="gestion" class="hidden mt-4 text-gray-700 text-center">
                            <p> Con GASTROSOFT, gestionamos los pedidos de manera eficiente para 
                                asegurar que recibas tu comida rápidamente y en perfectas condiciones. Puedes realizar tu pedido 
                                por teléfono, o en persona. Seguimos cada pedido desde la toma hasta
                                 la entrega, asegurando tiempos de entrega rápidos y opciones de 
                                personalización para satisfacer tus preferencias. 
                                 </p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('cuentas')">Control de inventarios</button>
                        <div id="cuentas" class="hidden mt-4 text-gray-700 text-center">
                            <p> Con GASTROSOFT, gestionamos las cuentas de manera precisa y eficiente. 
                                Utilizamos un sistema avanzado para el seguimiento de transacciones y la generación de facturas. 
                                Puedes revisar tu historial de compras y realizar pagos de manera segura a través de nuestra plataforma. 
                                Nuestro equipo está disponible para ayudarte con cualquier consulta relacionada con la facturación</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('soporte')">Soporte técnico</button>
                        <div id="soporte" class="hidden mt-4 text-gray-700 text-center">
                            <p> con GASTROSOFT, ofrecemos soporte técnico para asegurar que nuestro sistema de gestión funcione sin problemas.
                                 Puedes contactarnos para asistencia técnica a través de nuestro teléfono +573124267891.
                                  Nuestro equipo está disponible de (8:00 a.m a 5:00 p.m) para ayudarte con cualquier problema o pregunta que tengas.
                                 También proporcionamos actualizaciones y mejoras regulares para mantener nuestro sistema al día</p>
                        </div>
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

