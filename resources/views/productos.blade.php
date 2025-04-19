<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Productos
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <!-- Desayunos -->
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Desayunos</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Caldos -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="ruta/a/imagen.jpg" alt="Caldo" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Caldo</h3>
                    <p class="text-gray-600">Descripción breve del caldo.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('caldo-menu')">
                        Seleccionar
                    </button>
                    <div id="caldo-menu" class="hidden mt-4">
                        <h4 class="text-lg font-semibold text-gray-800">Menú del Día</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li><input type="checkbox" id="caldo-item1" name="caldo-item1"><label for="caldo-item1"> Item 1</label></li>
                            <li><input type="checkbox" id="caldo-item2" name="caldo-item2"><label for="caldo-item2"> Item 2</label></li>
                            <li><input type="checkbox" id="caldo-item3" name="caldo-item3"><label for="caldo-item3"> Item 3</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Huevos al gusto -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="ruta/a/imagen.jpg" alt="Huevos al gusto" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Huevos al gusto</h3>
                    <p class="text-gray-600">Descripción breve de los huevos al gusto.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('huevos-menu')">
                        Seleccionar
                    </button>
                    <div id="huevos-menu" class="hidden mt-4">
                        <h4 class="text-lg font-semibold text-gray-800">Menú del Día</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li><input type="checkbox" id="huevos-item1" name="huevos-item1"><label for="huevos-item1"> Item 1</label></li>
                            <li><input type="checkbox" id="huevos-item2" name="huevos-item2"><label for="huevos-item2"> Item 2</label></li>
                            <li><input type="checkbox" id="huevos-item3" name="huevos-item3"><label for="huevos-item3"> Item 3</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Empanadas -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="ruta/a/imagen.jpg" alt="Empanadas" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Empanadas</h3>
                    <p class="text-gray-600">Descripción breve de las empanadas.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('empanadas-menu')">
                        Seleccionar
                    </button>
                    <div id="empanadas-menu" class="hidden mt-4">
                        <h4 class="text-lg font-semibold text-gray-800">Menú del Día</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li><input type="checkbox" id="empanadas-item1" name="empanadas-item1"><label for="empanadas-item1"> Item 1</label></li>
                            <li><input type="checkbox" id="empanadas-item2" name="empanadas-item2"><label for="empanadas-item2"> Item 2</label></li>
                            <li><input type="checkbox" id="empanadas-item3" name="empanadas-item3"><label for="empanadas-item3"> Item 3</label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Almuerzos -->
        <h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Almuerzos</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Corrientes -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="ruta/a/imagen.jpg" alt="Almuerzo corriente" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Almuerzo corriente</h3>
                    <p class="text-gray-600">Descripción breve del almuerzo corriente.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('corriente-menu')">
                        Seleccionar completo
                    </button>
                    <button class="mt-4 bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700" onclick="toggleMenu('corriente-menu')">
                        Seleccionar medio
                    </button>
                    <div id="corriente-menu" class="hidden mt-4">
                        <h4 class="text-lg font-semibold text-gray-800">Menú del Día</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li><input type="checkbox" id="corriente-item1" name="corriente-item1"><label for="corriente-item1"> Item 1</label></li>
                            <li><input type="checkbox" id="corriente-item2" name="corriente-item2"><label for="corriente-item2"> Item 2</label></li>
                            <li><input type="checkbox" id="corriente-item3" name="corriente-item3"><label for="corriente-item3"> Item 3</label></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Almuerzos especiales -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="ruta/a/imagen.jpg" alt="Almuerzo especial" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">Almuerzo especial</h3>
                    <p class="text-gray-600">Descripción breve del almuerzo especial.</p>
                    <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('especial-menu')">
                        Seleccionar
                    </button>
                    <div id="especial-menu" class="hidden mt-4">
                        <h4 class="text-lg font-semibold text-gray-800">Menú del Día</h4>
                        <ul class="list-disc pl-5 text-gray-600">
                            <li><input type="checkbox" id="especial-item1" name="especial-item1"><label for="especial-item1"> Item 1</label></li>
                            <li><input type="checkbox" id="especial-item2" name="especial-item2"><label for="especial-item2"> Item 2</label></li>
                            <li><input type="checkbox" id="especial-item3" name="especial-item3"><label for="especial-item3"> Item 3</label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

            <!-- Bebidas -->
             
<h3 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Bebidas</h3>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
    <!-- Ejemplo de bebida -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="ruta/a/imagen.jpg" alt="Bebida" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800">Bebida</h3>
            <p class="text-gray-600">Descripción breve de la bebida.</p>
            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700" onclick="toggleMenu('bebida-menu')">
                Seleccionar
            </button>
            <div id="bebida-menu" class="hidden mt-4">
                <h4 class="text-lg font-semibold text-gray-800">Tipo de bebida</h4>
                <ul class="list-disc pl-5 text-gray-600">
                    <li><input type="checkbox" id="bebida-item1" name="bebida-item1"><label for="bebida-item1"> Item 1</label></li>
                    <li><input type="checkbox" id="bebida-item2" name="bebida-item2"><label for="bebida-item2"> Item 2</label></li>
                    <li><input type="checkbox" id="bebida-item3" name="bebida-item3"><label for="bebida-item3"> Item 3</label></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Repite el bloque anterior para cada bebida -->
</div>

    <script>
    function toggleMenu(menuId) {
        var menu = document.getElementById(menuId);
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
    </script>
</x-app-layout>