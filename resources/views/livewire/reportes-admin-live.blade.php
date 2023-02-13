<div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">BIENVENIDO AL PANEL DE REPORTES DE {{$departamentoElegido->Departamento}}</h2>
        @role('administrador')
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group relative">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="https://www.microtech.es/hubfs/Fotos%20blog/inventario.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div class="flex w-full justify-center items-center">
                    <h3 class="text-xl flex w-full text-center text-gray-700">
                        REPORTES DE INVENTARIO
                    </h3>
                    </div>
                </div>
                </a>
            </div>
            
        @endrole
    </div>
  </div>
