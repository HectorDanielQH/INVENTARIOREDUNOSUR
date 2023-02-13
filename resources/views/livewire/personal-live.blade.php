<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container mx-auto  flex ">
        <div class="flex w-full justify-center py-4">
            <input type="text" class="w-9/12 rounded outline-none mx-2" wire:model="busqueda">
            <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModal()">
                AGREGAR PERSONAL    
            </button>
        </div>
    </div>


    
    <!--TABLE CON TAILWIND-->
    <div class="container mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3">
                            <table class="table-auto w-full">
                                <thead>
                                    <tr>
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
                                        <td class="px-4 py-2">{{$personal->ci}}</td>
                                        <td class="px-4 py-2">{{$personal->nombre}}</td>
                                        <td class="px-4 py-2">{{$personal->apellido}}</td>
                                        <td class="px-4 py-2">{{$personal->celular}}</td>
                                        <td class="px-4 py-2">{{$personal->departamentos->Departamento}}</td>
                                        <td class="px-4 py-2">{{$personal->unidades->NombreUnidad}}</td>
                                        <td class="px-4 py-2 flex justify-center items-center">
                                            <button class="block mx-1 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActualizar('{{$personal->ci}}')">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="block mx-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarUsuario('{{$personal->ci}}')">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                                <td colspan="7" class="px-4 py-2 text-center">No hay registros</td>
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
                            <div>
                                <label for="ci"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CI</label>
                                <input type="text"  wire:model="ci" id="ci" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA EL CI" required>
                            </div>
                            <div>
                                <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NOMBRES</label>
                                <input type="text" wire:model="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LOS NOMBRES" required>
                            </div>
                            <div>
                                <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">APELLIDOS</label>
                                <input type="text" wire:model="apellido" id="apellido" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LOS APELLIDOS" required>
                            </div>
                            <div>
                                <label for="celular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">CELULAR</label>
                                <input type="number" wire:model="celular" id="celular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA EL NUMERO DE CELULAR" required>
                            </div>
                            <div>
                                <label for="unidad" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">UNIDAD</label>
                                <select wire:model="id_unidad" id="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                    <option value="" selected>Selecciona una unidad</option>
                                    @foreach($unidades as $unidad)
                                        <option value="{{$unidad->id}}">{{$unidad->NombreUnidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button wire:click="Guardar()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrar Usuario</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
