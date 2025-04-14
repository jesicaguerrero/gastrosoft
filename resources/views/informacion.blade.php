<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Información 
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4 text-blue-600 text-center">Bienvenido a MARICHANEL</h3>
                <p class="text-gray-700 mb-4 text-center">
                    En MARICHANEL, nos enorgullecemos de ofrecer una experiencia culinaria excepcional. Aquí encontrarás información sobre nuestra historia, misión, visión, y detalles de contacto.
                </p>
                <div class="flex flex-col items-center space-y-6">
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('historia')">Historia del restaurante</button>
                        <div id="historia" class="hidden mt-4 text-gray-700 text-center">
                            <p>En MARICHANEL, comenzamos nuestra aventura culinaria en [año de fundación]. Desde entonces, hemos crecido y evolucionado, ofreciendo a nuestros clientes una experiencia gastronómica única y memorable.</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('menu')">Menú y especialidades</button>
                        <div id="menu" class="hidden mt-4 text-gray-700 text-center">
                            <p>Nuestro menú incluye una variedad de platos deliciosos, desde entradas frescas hasta postres exquisitos. Algunas de nuestras especialidades incluyen [nombre de especialidades].</p>
                        </div>
                    </div>
                    <div>
                        <button class="bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-700 w-full" onclick="toggleSection('servicios')">Servicios y eventos</button>
                        <div id="servicios" class="hidden mt-4 text-gray-700 text-center">
                            <p>Ofrecemos una gama de servicios y eventos, incluyendo [descripción de servicios y eventos]. Ya sea que estés planeando una cena íntima o un gran evento, estamos aquí para hacer que tu experiencia sea inolvidable.</p>
                        </div>
                    </div>
                </div>
               
                <div class="mt-6 text-center">
                    <h4 class="text-md font-bold text-gray-800">Ubicación</h4>
                    <div class="flex justify-center">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509374!2d-122.419415484681!3d37.7749297797596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5b6a6b1b%3A0x4c6f8e4b5b6a6b1b!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1616161616161!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

