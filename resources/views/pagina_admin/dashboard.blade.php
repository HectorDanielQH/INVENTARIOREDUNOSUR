<x-app-layout>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
          <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">BIENVENIDO AL PANEL DE CONTROL DE LA SUCURSAL DE {{$departamento[0]->Departamento}}</h2>
          @if(Auth::user()->hasRole('administrador') || Auth::user()->hasRole('encargado'))
          
          <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @if(Auth::user()->hasRole('administrador'))
            <a href="{{route('encargado.create',['req'=>$departamento[0]])}}" target="_blank" class="group relative">
              <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                <img src="https://static.vecteezy.com/system/resources/previews/000/377/948/non_2x/add-user-vector-icon.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
              </div>
              <div class="mt-4 flex justify-between">
                <div class="flex w-full justify-center items-center">
                  <h3 class="text-xl flex w-full text-center text-gray-700">
                      OPCIONES DE ENCARGADOS DE RED UNO SUR
                  </h3>
                </div>
                
              </div>
            </a>
            @endif
            <a href="{{route('personal.create',['req'=>$departamento[0]])}}" target="_blank" class="group relative">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                  <img src="https://www.pngkit.com/png/full/698-6989426_nuestro-personal-administrativo-es-una-de-las-bases.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between">
                  <div class="flex w-full justify-center items-center">
                    <h3 class="text-xl flex w-full text-center text-gray-700">
                        OPCIONES DE PERSONAL RED UNO SUR
                    </h3>
                  </div>
                </div>
            </a>

            <a href="{{route('unidad.create',['req'=>$departamento[0]])}}" target="_blank" class="group relative">
                <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                  <img src="https://milagrosruizbarroeta.com/wp-content/uploads/2019/12/017-management.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between">
                  <div class="flex w-full justify-center items-center">
                    <h3 class="text-xl flex w-full text-center text-gray-700">
                        UNIDADES DE RED UNO SUR
                    </h3>
                  </div>
                </div>
              </a>


            <a href="{{route('inventario.create',['req'=>$departamento[0]])}}" target="_blank" class="group relative">
              <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                <img src="https://cdn-icons-png.flaticon.com/512/2897/2897785.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
              </div>
              <div class="mt-4 flex justify-between">
                <div class="flex w-full justify-center items-center">
                  <h3 class="text-xl flex w-full text-center text-gray-700">
                      INVENTARIO DE RED UNO SUR
                  </h3>
                </div>
              </div>
            </a>

            <a href="{{route('remisionmaterial.create',['req'=>$departamento[0]])}}" 
            target="_blank"
            class="group relative">
              <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                <img src="https://cdn-icons-png.flaticon.com/512/4133/4133328.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
              </div>
              <div class="mt-4 flex justify-between">
                <div class="flex w-full justify-center items-center">
                  <h3 class="text-xl flex w-full text-center text-gray-700">
                      REMISION DE MATERIALES
                  </h3>
                </div>
              </div>
            </a>
          @endif
            <!-- More products... -->
          </div>
        </div>
      </div>
</x-app-layout>