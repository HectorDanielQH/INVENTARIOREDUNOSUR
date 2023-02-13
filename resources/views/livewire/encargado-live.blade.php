<div>
    <div>
        {{-- Because she competes with no one, no one can compete with her. --}}
        <div class="container mx-auto  flex ">
            <div class="flex w-full justify-center py-4">
                <label for="">BUSCA LA UNIDAD</label>
                <select wire:model="id_unidad" id="unidad" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <option value="" selected>Selecciona una unidad</option>
                    @foreach($unidades as $unidad)
                        <option value="{{$unidad->id}}">{{$unidad->NombreUnidad}}</option>
                    @endforeach
                </select>
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
                                        @forelse ($personal as $personales)
                                        <tr>
                                            <td class="px-4 py-2">{{$personales->ci}}</td>
                                            <td class="px-4 py-2">{{$personales->nombre}}</td>
                                            <td class="px-4 py-2">{{$personales->apellido}}</td>
                                            <td class="px-4 py-2">{{$personales->celular}}</td>
                                            <td class="px-4 py-2">{{$personales->departamentos->Departamento}}</td>
                                            <td class="px-4 py-2">{{$personales->unidades->NombreUnidad}}</td>

                                            <td class="px-4 py-2 flex justify-center items-center">
                                                <!--VERIFICAR ROLE-->

                                                @if($personales->rol == 'encargado')
                                                    <button disabled class="block mx-1 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button" data-modal-toggle="authentication-modal">
                                                        ASIGNADO
                                                    </button>
                                                    <button class="block mx-1 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-modal-toggle="authentication-modal" wire:click="EditarRol('{{$personales->id}}')">
                                                        <i class="fa-solid fa-edit"></i>
                                                    </button>
                                                    <button class="block mx-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarRol('{{$personales->id}}')">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                @elseif($personales->rol == 'personal')
                                                    <button class="block mx-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="AñadirRol('{{$personales->id}}')">
                                                        ASIGNAR
                                                    </button>
                                                @endif
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
            <div id="authentication-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center flex" aria-modal="true" role="dialog">
                <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" wire:click="CerrarModal()" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">ASIGNAR ROL DE ENCARGADO</h3>
                            <div class="space-y-6">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">INGRESA EL CORREO ELECTRÓNICO</label>
                                    <input type="email" wire:model="correo" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LA CORREO ELECTRÓNICO" required>
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">PASSWORD</label>
                                    <input type="text" wire:model="contraseña" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LA CONTRASEÑA" required>
                                </div>

                                <button wire:click="GuardarRol()" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Asignar Encargado</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>    
</div>