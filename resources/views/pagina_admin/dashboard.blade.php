<x-app-layout>
    <div class="bg-gray-800">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-orange-500 animate-pulse">
          BIENVENIDO AL PANEL DE CONTROL DE LA SUCURSAL DE {{$departamento[0]->Departamento}}
        </h2>
          @if(Auth::user()->hasRole('administrador') || Auth::user()->hasRole('encargado'))
          
          <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

            <a href="{{route('unidad.create',['req'=>$departamento[0]])}}" class="group relative flex flex-col justify-between bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
              <div class="aspect-w-1 aspect-h-1 lg:aspect-none">
                <div class="w-full h-full bg-white flex items-center justify-center transition duration-300 group-hover:opacity-75">
                    <img src="https://milagrosruizbarroeta.com/wp-content/uploads/2019/12/017-management.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover">
                  </div>
                </div>
                <div class="px-4 py-3">
                  <h3 class="text-lg text-center font-medium text-orange-600 mb-2">UNIDADES DE RED UNO SUR</h3>
                </div>
            </a>

            <a href="{{route('personal.create',['req'=>$departamento[0]])}}" class="group relative flex flex-col justify-between bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
                <div class="aspect-w-1 aspect-h-1 lg:aspect-none">
                  <div class="w-full h-full bg-white flex items-center justify-center transition duration-300 group-hover:opacity-75">
                    <img src="https://www.pngkit.com/png/full/698-6989426_nuestro-personal-administrativo-es-una-de-las-bases.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover">
                  </div>
                </div>
                <div class="px-4 py-3">
                  <h3 class="text-lg text-center font-medium text-orange-600 mb-2">PERSONAL RED UNO SUR</h3>
                </div>
            </a>

            @if(Auth::user()->hasRole('administrador'))
            <a href="{{ route('encargado.create', ['req' => $departamento[0]]) }}" class="group relative flex flex-col justify-between bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
              <div class="aspect-w-1 aspect-h-1 lg:aspect-none">
                <div class="w-full h-full bg-orange-500 flex items-center justify-center transition duration-300 group-hover:opacity-75">
                  <img src="https://static.vecteezy.com/system/resources/previews/000/377/948/non_2x/add-user-vector-icon.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover">
                </div>
              </div>
              <div class="px-4 py-3">
                <h3 class="text-lg text-center font-medium text-orange-600 mb-2">ENCARGADOS RED UNO SUR</h3>
              </div>
            </a>
            @endif

            
            <a href="{{route('inventario.create',['req'=>$departamento[0]])}}" class="group relative flex flex-col justify-between bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
              <div class="aspect-w-1 aspect-h-1 lg:aspect-none">
                <div class="w-full h-full bg-white flex items-center justify-center transition duration-300 group-hover:opacity-75">
                <img src="https://cdn-icons-png.flaticon.com/512/2897/2897785.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover">
              </div>
            </div>
              <div class="px-4 py-3">
                  <h3 class="text-lg text-center font-medium text-orange-600 mb-2">
                      INVENTARIO RED UNO SUR
                  </h3>
              </div>
            </a>

            <a href="{{route('remisionmaterial.create',['req'=>$departamento[0]])}}"  class="group relative flex flex-col justify-between bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-lg hover:-translate-y-1">
              <div class="aspect-w-1 aspect-h-1 lg:aspect-none">
                <div class="w-full h-full bg-white flex items-center justify-center transition duration-300 group-hover:opacity-75">
                <img src="https://cdn-icons-png.flaticon.com/512/4133/4133328.png" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover">
              </div>
            </div>
              <div class="px-4 py-3">
                  <h3 class="text-lg text-center font-medium text-orange-600 mb-2">
                      REMISION DE MATERIALES
                  </h3>
              </div>
            </a>
          @endif
            <!-- More products... -->
          </div>
        </div>
      </div>
</x-app-layout>