<div>
    <!--enlace redireccion-->
    <div class="container w-4/5 mx-auto pt-7 pb-3 animate-pulse">
        <a
        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" 
        href="
            {{
                 route('pagadmin.index',['id' => $departamento])
            }}
        ">
            <i class="fa-solid fa-arrow-left"></i>
            VOLVER ATRAS
        </a>
    </div>

    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container mx-auto  flex">
        <div class="flex w-full justify-center py-4 text-white">
            <label for="personal">INGRESA EL CI DEL PERSONAL</label>
            <input type="text" id="personal" class="w-9/12 rounded outline-none mr-2 text-black dark:text-white dark:bg-gray-800" wire:model="busqueda">
            <button class="block text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModal()">
                AGREGAR PERSONAL    
            </button>
        </div>
    </div>
    


    
    <!--TABLE CON TAILWIND-->
    
<div class="container mx-auto">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full px-3">
        <div class="bg-gray-900 shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
          <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
              <table class="table-auto w-full">
                <thead>
                  <tr class="bg-orange-500 text-white">
                    <th class="px-4 py-2">CI</th>
                    <th class="px-4 py-2">NOMBRES</th>
                    <th class="px-4 py-2">APELLIDOS</th>
                    <th class="px-4 py-2">CELULAR</th>
                    <th class="px-4 py-2">DEPARTAMENTO</th>
                    <th class="px-4 py-2">UNIDAD</th>
                    <th class="px-4 py-2">OPCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($personal as $personal)
                  <tr>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->ci}}</td>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->nombre}}</td>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->apellido}}</td>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->celular}}</td>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->departamentos->Departamento}}</td>
                    <td class="px-4 py-2 text-center text-orange-500">{{$personal->unidades->NombreUnidad}}</td>
                    <td class="px-4 py-2 flex justify-center items-center">
                      <button class="block mx-1 text-white bg-yellow-500 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActualizar('{{$personal->ci}}')">
                        <i class="fas fa-pencil-alt"></i>
                      </button>
                      <button class="block mx-1 text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarUsuario('{{$personal->ci}}')">
                        <i class="fas fa-trash-alt"></i>
                      </button>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="7" class="px-4 py-2 text-center text-gray-300">No hay registros</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



    @if($modal)

    <div class="bg-slate-800 bg-opacity-50 flex justify-center items-center absolute top-0 right-0 bottom-0 left-0">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" wire:click="CerrarModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">REGISTRA EL PERSONAL</h3>
                        <div class="space-y-6">
                            <div class="flex">
                              <div class="w-3/4 mr-1">
                                <label for="ci"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CI</label>
                                <input type="text" wire:model="ci" id="ci" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA EL CI" required 
                                >
                                <script>
                                  let input = document.getElementById("ci");
                                  input.addEventListener("input", function(event) {
                                    let inputValue = event.target.value;
                                    inputValue = inputValue.replace(/[^0-9]/g, "");
                                    if (inputValue.length > 10) {
                                      inputValue = inputValue.slice(0, 10);
                                    }
                                    event.target.value = inputValue;
                                  });
                                </script>   
                                @error('ci') 
                                  <h1 class="text-yellow-500 mt-1 text-center">
                                      {{ __('Ingrese datos validos') }}
                                  </h1>
                                @enderror                         
                              </div>
                              
                                <div class="w-4/12">
                                  <label for="cicomplemento"  class="flex w-full justify-between items-center mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    COMPLEMENTO
                                  </label>
                                  <input type="text"  wire:model="cicomplemento" id="cicomplemento" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="EJEM.: 1O" required>
                                  <script>
                                    // Selecciona el campo de entrada de texto
                                    let input = document.getElementById("cicomplemento");
                                  
                                    // Agrega un evento de escucha de entrada
                                    input.addEventListener("input", function(event) {
                                      let inputValue = event.target.value;
                                      inputValue = inputValue.replace(/[^0-9a-zA-Z]/g, "");
                                      if (inputValue.length > 2) {
                                        inputValue = inputValue.slice(0, 2);
                                      }
                                      event.target.value = inputValue.toUpperCase();
                                    });
                                  </script>   
                                </div>
                            </div>
                            <div>
                                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NOMBRES</label>
                                <input type="text" wire:model="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LOS NOMBRES" required>
                                <script>
                                  let input = document.getElementById("nombre");
                                  input.addEventListener("input", function(event) {
                                    let inputValue = event.target.value;
                                    inputValue = inputValue.replace(/[0-9]/g, "");
                                    event.target.value = inputValue;
                                  });
                                </script>
                                @error('nombre') 
                                  <h1 class="text-yellow-500 mt-1 text-center">
                                      {{ __('Ingrese datos validos') }}
                                  </h1>
                                @enderror 
                            </div>
                            <div>
                                <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">APELLIDOS</label>
                                <input type="text" wire:model="apellido" id="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LOS APELLIDOS" required>
                                <script>
                                  let input = document.getElementById("apellido");
                                  input.addEventListener("input", function(event) {
                                    let inputValue = event.target.value;
                                    inputValue = inputValue.replace(/[0-9]/g, "");
                                    event.target.value = inputValue;
                                  });
                                </script>
                                @error('apellido') 
                                <h1 class="text-yellow-500 mt-1 text-center">
                                    {{ __('Ingrese datos validos') }}
                                </h1>
                              @enderror 
                            </div>
                            <div>
                                <label for="celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CELULAR</label>
                                <input type="number" wire:model="celular" id="celular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA EL NUMERO DE CELULAR" required>
                                <script>
                                  let input = document.getElementById("celular");
                                  input.addEventListener("input", function(event) {
                                    let inputValue = event.target.value;
                                    inputValue = inputValue.replace(/[^0-9]/g, "");
                                    if(inputValue.length>8){
                                      inputValue = inputValue.slice(0, 8);
                                    }
                                    event.target.value = inputValue;
                                  });
                                </script> 
                                @error('celular') 
                                  <h1 class="text-yellow-500 mt-1 text-center">
                                      {{ __('Ingrese datos validos') }}
                                  </h1>
                                @enderror 
                            </div>
                            <div>
                                <label for="unidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UNIDAD</label>
                                <select wire:model="id_unidad" id="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="" selected>Selecciona una unidad</option>
                                    @foreach($unidades as $unidad)
                                        <option value="{{$unidad->id}}">{{$unidad->NombreUnidad}}</option>
                                    @endforeach
                                </select>
                                @error('id_unidad') 
                                    <h1 class="text-yellow-500 mt-1 text-center">
                                        {{ __('Es requerido seleccionar la unidad') }}
                                    </h1>
                                @enderror 
                            </div>
                            <button wire:click="Guardar()" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Registrar Usuario</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
