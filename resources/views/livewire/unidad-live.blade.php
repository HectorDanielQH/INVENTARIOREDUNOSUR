<div>
    <div>
        @if (session()->has('message'))
            <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed z-10 inset-0 overflow-y-auto">
                <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
                    <form class="relative bg-red-500 rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full" wire:submit.prevent="falso()">
                        <div class="bg-red-500 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                            <div class="sm:flex sm:items-start">
                                <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-800 sm:mx-0 sm:h-10 sm:w-10">
                                    <!-- Heroicon name: outline/exclamation -->
                                    <svg class="h-6 w-6 text-gray-100" xmlns="http://www.w3.org/3000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-4 font-medium text-white" id="modal-title">Error de eliminación</h3>
                                    <div class="mt-2">
                                        <p class="text-lg text-white">{{ session('message') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-orange-400 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-or-green-800 sm:ml-3 sm:w-auto sm:text-sm transition-transform transform hover:scale-110 hover:shadow-lg hover:text-white">
                                Aceptar
                            </button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    <!--enlace redireccion-->
    <div class="container w-4/5 mx-auto pt-7 pb-3">
        <a
        class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded animate-pulse" 
        href="
            {{
                 route('pagadmin.index',['id' => $departamento])
            }}
        ">
            <i class="fa-solid fa-arrow-left"></i>
            VOLVER ATRAS
        </a>
    </div>


    <div class="container mx-auto flex justify-center py-4">
        <label for="busqueda" class="text-white uppercase mr-4">Ingresa el nombre de la unidad</label>
        <input type="text" id="busqueda" class="w-full px-4 py-2 rounded-md outline-none border-gray-300 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-700 dark:text-white dark:border-gray-500 dark:focus:border-blue-500 dark:focus:ring-blue-500" wire:model="busqueda" pattern="[A-Z\s]+" required>
        <button class="ml-4 px-4 py-2 text-sm font-medium text-white bg-orange-700 rounded-md hover:bg-orange-800 focus:outline-none focus:ring-4 focus:ring-orange-300 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModal()">AGREGAR MAS UNIDADES</button>
    </div>
    
    <script>
        let input = document.getElementById('busqueda');
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
        });
    </script>
    
    
    
    <div class="container mx-auto bg-gray-900 text-white">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full px-3">
                <div class="bg-gray-900 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full px-3">
                    <table class="table-auto w-full">
                        <thead>
                        <tr class="bg-orange-500 text-white">
                            <th class="px-4 py-2">DESCRIPCIÓN DE LA UNIDAD</th>
                            <th class="px-4 py-2">OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($unidad as $unidades)
                        <tr>
                            <td class="px-4 py-2 text-orange-500 text-center">{{$unidades->NombreUnidad}}</td>
                            <td class="px-4 py-2 flex justify-center items-center">
                                <button class="block mx-1 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button" data-modal-toggle="authentication-modal" wire:click="MostrarModalActualizar('{{$unidades->NombreUnidad}}','{{$unidades->NombreUnidad}}')">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.293 15.707l-1 1a1 1 0 000 1.414l3 3a1 1 0 001.414 0l1-1a1 1 0 000-1.414l-3-3a1 1 0 00-1.414 0zm15.414-9.414l-8 8a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414l8-8a1 1 0 011.414 0l3 3a1 1 0 010 1.414z"/></svg>
                                 
                                </button>
                                <button class="block mx-1 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800" type="button" data-modal-toggle="authentication-modal" wire:click="EliminarUsuario('{{$unidades->NombreUnidad}}')">
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-2.35-9.65a1 1 0 011.41 0L10 8.59l1.94-1.94a1 1 0 011.41 1.41L11.41 10l1.94 1.94a1 1 0 01-1.41 1.41L10 11.41l-1.94 1.94a1 1 0 01-1.41-1.41L8.59 10 6.65 8.06a1 1 0 010-1.41z" clip-rule="evenodd"/></svg>                                     
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
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">REGISTRA LA UNIDAD</h3>
                        <div class="space-y-6">
                            <div>
                                <label for="nombre"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">DESCRIPCIÓN DE LA UNIDAD</label>
                                <input type="text" wire:model="NombreUnidad" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="INSERTA LA UNIDAD" required>
                                <script>
                                    let input = document.getElementById('nombre');
                                    input.addEventListener('input', function() {
                                        this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
                                    });
                                </script>
                                @error('NombreUnidad') 
                                    <h1 class="text-yellow-500 mt-4 text-center">
                                        {{ __('EL CAMPO ES REQUERIDO') }}
                                    </h1>
                                @enderror
                            </div>
                            <button wire:click="Guardar()" class="w-full text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-800">Registrar Unidad</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
